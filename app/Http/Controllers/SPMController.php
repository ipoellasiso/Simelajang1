<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\SPM;

class SPMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('opd.sipdri');
    }

    public function indexgu()
    {
        return view('opd.sipdrigu');
    }

    public function simpan_sp2d()
    {
        return view('simpansp2d');
    }

    public function simpan_sp2dgu()
    {
        return view('simpansp2dgu');
    }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
