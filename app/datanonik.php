<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datanonik extends Model
{
    protected $table = 'data_tanpanik';
    protected $fillable = [
        'id',
        'nama',
        'desc',
        'id_paspor',
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
