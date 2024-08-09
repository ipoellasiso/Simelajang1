<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class DetailSPMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $respons = Http::withHeaders([
        //     'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJTSVBEX0FVVEhfU0VSVklDRSIsInN1YiI6IjEzMzg2OC4zNDIiLCJleHAiOjE3MTE0NjY2NDcsImlhdCI6MTcxMTI1MDY0NywidGFodW4iOjIwMjQsImlkX3VzZXIiOjEzMzg2OCwiaWRfZGFlcmFoIjozNDIsImtvZGVfcHJvdmluc2kiOiI3MiIsImlkX3NrcGQiOjAsImlkX3JvbGUiOjExLCJpZF9wZWdhd2FpIjoxMjU0ODUsInN1Yl9kb21haW5fZGFlcmFoIjoicGFsdSJ9.7BlBofPuf0SO1oZjyJJsk5M3VegjjX5Sph-NVIy4UZ8'
        // ])->get('https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/index?jenis=&status=diterima&page=1&limit=10');
        // $jsonData = $respons->json();
        // // $data = $respons['data'];
        // return view('opd.indexx', ['data' => $jsonData]);
        // dd($jsonData);

        

        return view('opd.indexxx');
      

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
