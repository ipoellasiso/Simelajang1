<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PajakguModel;

class PajakguController extends Controller
{
    // public function __construct()
    // {
    //     $this->PajakguModel = new PajakguModel();
    // }

    public function index()
    {
        $data = PajakguModel::class::all()->where('id_opd', auth()->user()->id_opd);
        return view('pajak_gu.v_index', compact('data'));
    }
}
