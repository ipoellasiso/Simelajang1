<?php

namespace App\Http\Controllers;

use App\Models\DataPajakls as ModelsDataPajakls;
use Illuminate\Http\Request;

class DataPajak extends Controller
{
    function index(){
        $data = ModelsDataPajakls::class::all()->where('id_opd', auth()->user()->id_opd);
        return view('data_pajak.index',compact(['data']));
    }

    function tambah(){
        return view('data_pajak.tambah');
    }

    function edit($id_pajak)
    {
        $data = ModelsDataPajakls::find($id_pajak);
        return view('data_pajak.edit',['data' => $data]); 
    }

    function hapus(Request $request)
    {
        ModelsDataPajakls::where('id_pajak', $request->id_pajak)->delete();

        Session::flash('success', 'Berhasil dihapus');
        return redirect('/datapajak');

    }
}
