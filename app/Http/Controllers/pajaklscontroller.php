<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pajaklscontroller extends Controller
{
    public function index()
    {

        $pajakls1 = DB::table('potongan2')
        ->select('potongan2.jenis_pajak', 'potongan2.nilai_pajak', 'potongan2.ebilling', 'sp2d.tanggal_sp2d', 'sp2d.nomor_sp2d', 'sp2d.nilai_sp2d', 'sp2d.nomor_spm', 'sp2d.tanggal_spm', 'sp2d.npwp_pihak_ketiga',)
        ->join('sp2d', 'potongan2.id_potongan', 'sp2d.idhalaman',)
        ->whereIn('potongan2.jenis_pajak', ['Pajak Pertambahan Nilai','Pajak Penghasilan Ps 22','Pajak Penghasilan Ps 23','PPh 21'])
        ->get();

        return view('opd.pajakls', compact('pajakls1'));

    }












}
