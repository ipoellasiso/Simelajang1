<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
// use Nette\Utils\Random;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    function index()
    {
        return view('halaman_auth/login');
    }

    function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            if(Auth::user()->email_verified_at != null){
                if(Auth::user()->role === 'admin'){
                    return redirect()->route('admin')->with('success'.'Halo admin, Anda Berhasil Login');
                } else if(Auth::user()->role === 'user'){
                    return redirect()->route('user')->with('Success', 'Berhasil Login');
                }
            } else {
                Auth::logout();
                return redirect()->route('auth')->withErrors('Akun Anda Belum Aktif Harap Verifikasi terlebih dahulu');
            }
            
        }else{
            return redirect()->route('auth')->withErrors('Email atau Password Salah');
        }
    }

    function Create()
    {
        return view('halaman_auth/register');
    }

    function register(Request $request)
    {
        $str = Str::random(100);

        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'gambar' => 'required|image|file',
        ],[
            'fullname.required' => 'Full Name Wajib Diisi',
            'fullname.min' => 'Full Name Minimal 5 Karater',
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Email Telah Terdaftar',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Password Minimal 6 Karakter',
            'gambar.required' => 'Gambar Wajib Diupload',
            'gambar.image' => 'Gambar yang di upload harus image',
            'gambar.file' => 'Gambar Harus berupa File',
        ]);

        $gambar_file = $request->file('gambar');
        $gambar_ekstensi = $gambar_file->extension();
        $nama_gambar = date('ymdhis') . "." . $gambar_ekstensi;
        $gambar_file->move(public_path('picture/accounts'), $nama_gambar);

        $inforegister = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password,
            'gambar' => $nama_gambar,
            'verify_key' => $str
        ];

        User::Create($inforegister);
        
        $details = [
            'nama' =>$inforegister['fullname'],
            'role' =>'user',
            'datetime' => date('Y-m-d H:i:s'),
            'website' =>'SIMELAJANG',
            'url' =>'http://'. request()->getHttpHost() . "/" . "verify/". $inforegister['verify_key'],
        ];

        Mail::to($inforegister['email'])->send(new AuthMail($details));
        
        return redirect()->route('auth')->with('success','Link Verifikasi telah dikirim ke email anda. Cek email untuk melakukan verifikasi');

    }

    function verify($verify_key){
        $keyCheck = User::select('verify_key')
        ->where('verify_key',$verify_key)
        ->exists();

        if($keyCheck){
            $user = User::where('verify_key',$verify_key)->update(['email_verified_at' => date('Y-m-d H:i:s')]);

            return redirect()->route('auth')->with('Success', 'Verifikasi Berhasil. Akun anda sudah aktif');
        } else {
            return redirect()->route('auth')->withErrors('Keys tidak Valid. Pastikan telah melakukan registrasi')->withInput();
            
        }
    }

    function logout(){
        auth::logout();
        return redirect('/');
    }
}
