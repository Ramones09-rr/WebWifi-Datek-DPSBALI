<?php

namespace App\Imports;

use App\Models\Datek;
use Maatwebsite\Excel\Concerns\ToModel;

class DatekImport implements ToModel
{
    public function model(array $row)
    {
        return new Datek([
            'sn' => $row[1],
            'mac' => $row[2],
            'sto' => $row[3],
            'log' => $row[4],
            'ap' => $row[5],
            'alamat' => $row[6],
            'ont' => $row[7],
            'lokasi' => $row[8],
            'olt' => $row[9],
            'gpon' => $row[10],
            'onu' => $row[11],
            'vlan' => $row[12],
            'status' => $row[13],
            'odp' => $row[14]
        ]);
    }
}
