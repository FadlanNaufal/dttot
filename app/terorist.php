<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terorist extends Model
{
    protected $table = 'master_data';
    protected $fillable = [
        'id',
        'nama',
        'deskripsi',
        'terduga',
        'kode_sensus',
        'tempat_lahir',
        'tanggal_lahir',
        'warga_negara',
        'alamat',
        'pekerjaan',
        'informasi_lain',
    ];
}
