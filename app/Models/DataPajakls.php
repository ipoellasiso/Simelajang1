<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPajakls extends Model
{
    use HasFactory;
    public $table = 'tbl_pajakls';
    public $fillable = [
        'id_pajak',
        'tgl_spmm',
        'tgl_spm',
        'no_spm',
        'nilai_spm',
        'tgl_sp2d',
        'no_sp2d',
        'tgl_sp2dd',
        'nilai_sp2d',
        'akun_belanja',
        'id_kap',
        'id_jap',
        'nilai_pajak',
        'npwp_rekanan',
        'nama_rekanan',
        'ntpn',
        'ebiling',
        'keterangan',
        'input',
        'info',
        'status',
    ];
}
