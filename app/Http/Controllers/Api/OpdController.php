<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Opd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Opd::all();
        return response()->json([
            'status' => true,
            'message' => 'Data Ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataOpd = new Opd;

        $rules = [
            'nama_opd' => 'required',
            'nama_bendahara' => 'required',
            'alamat' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Gagal Memasukan Data',
                'data' => $validator->errors()
            ]);
        }

        $dataOpd->nama_opd = $request->nama_opd;
        $dataOpd->nama_bendahara = $request->nama_bendahara;
        $dataOpd->alamat = $request->alamat;

        $post = $dataOpd->save();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil Memasukan Data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Opd::find($id);
        if($data){
            return response()->json([
                'status' => true,
                'message' => 'Data Ditemukan',
                'data' => $data
            ],200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data Tidak Ditemukan',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataOpd = Opd::find($id);
        if(empty($dataOpd)){
            return response()->json([
                'status' => false,
                'message' => 'Data Tidak Ditemukan'
            ], 404);
        }

        $rules = [
            'nama_opd' => 'required',
            'nama_bendahara' => 'required',
            'alamat' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Gagal Update Data',
                'data' => $validator->errors()
            ]);
        }

        $dataOpd->nama_opd = $request->nama_opd;
        $dataOpd->nama_bendahara = $request->nama_bendahara;
        $dataOpd->alamat = $request->alamat;

        $post = $dataOpd->save();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil Update Data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataOpd = Opd::find($id);
        if(empty($dataOpd)){
            return response()->json([
                'status' => false,
                'message' => 'Data Tidak Ditemukan'
            ], 404);
        }

        $post = $dataOpd->delete();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil Menghapus Data'
        ]);
    }
}
