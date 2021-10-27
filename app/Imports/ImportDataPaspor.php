<?php

namespace App\Imports;

use App\datanonik;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportDataPaspor implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new datanonik([
            'nama'          => $row[0],
            'desc'          => $row[1],
            'id_nik'        => $row[2],
            'terduga'       => $row[3],
            'kode_densus'   => $row[4],
            'tempat_lahir'  => $row[5],
            'tanggal_lahir' => $row[6],
            'wn'            => $row[7],
            'alamat'        => $row[8],
            'pekerjaan'     => $row[9],
            'info_lain'     => $row[10],
        ]);
    }
}
