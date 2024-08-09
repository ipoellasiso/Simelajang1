<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PajakguModel extends Model
{
    use HasFactory;
    public $table = 'pajak';

    // public function Tampildata()
    // {
    //     return DB::table('pajak')
    //     ->join('tbl_opd', 'tbl_opd.id_opd', '=', 'pajak.id_opd', 'left')
    //     // ->where('id', $id)
    //     // ->where('nama_opd', 'DINAS PENDIDIKAN DAN KEBUDAYAAN')
    //     ->get();
    // }
}

