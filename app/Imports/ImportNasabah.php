<?php

namespace App\Imports;

use App\Nasabah;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportNasabah implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Nasabah([
            'name'      => $row[0],
            'track'     => $row[1],
            'id_nik'    => $row[2],
            'status'    => $row[3],
            'note'      => $row[4],
        ]);
    }
}
