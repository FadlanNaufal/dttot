<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datanik extends Model
{
    protected $table = 'data_nik';
    protected $fillable = [
        'id',
        'nama',
        'desc',
        'id_nik',
        'terduga',
        'kode_densus',
        'tempat_lahir',
        'tanggal_lahir',
        'wn',
        'alamat',
        'pekerjaan',
        'info_lain',
    ];
}
