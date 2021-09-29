<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $fillable = [
        'id',
        'name',
        'track',
        'id_nik',
        'status',
        'note',
    ];
}
