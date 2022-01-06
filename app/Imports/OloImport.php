<?php

namespace App\Imports;

use App\Models\Olo;
use Maatwebsite\Excel\Concerns\ToModel;

class OloImport implements ToModel
{
    public function model(array $row)
    {
        return new Olo([
            'notic' => $row[1],
            'ts' => $row[2],
            'tc' => $row[3],
            'cust' => $row[4],
            'nid' => $row[5],
            'sid' => $row[6],
            'xid' => $row[7],
            'jin' => $row[8],
            'bw' => $row[9],
            'alamat' => $row[10],
            'long' => $row[11],
            'lat' => $row[12],
            'nte' => $row[13],
            'type' => $row[14],
            'product' => $row[15],
            'jla' => $row[16],
            'sto' => $row[17],
            'metro' => $row[18],
            'portm' => $row[19],
            'olt' => $row[20],
            'portl' => $row[21],
            'odp' => $row[22],
            'ont' => $row[23],
            'portn' => $row[24],
            'sn' => $row[25],
            'vlan' => $row[26],
            'oa' => $row[27],
            'ket' => $row[28]
        ]);
    }
}
