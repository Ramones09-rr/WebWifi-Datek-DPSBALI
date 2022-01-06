<?php

namespace App\Imports;

use App\Models\Node;
use Maatwebsite\Excel\Concerns\ToModel;

class NodeImport implements ToModel
{
    public function model(array $row)
    {
        return new Node([
            'sname' => $row[1],
            'sadd' => $row[2],
            'sid' => $row[3],
            'hsn' => $row[4],
            'lat' => $row[5],
            'long' => $row[6],
            'akses' => $row[7],
            'system' => $row[8],
            'hsi' => $row[9],
            'dme' => $row[10],
            'oname' => $row[11],
            'oport' => $row[12],
            'ptct' => $row[13],
            'sn' => $row[14],
            'ont' => $row[15],
            'v2g' => $row[16],
            'v3g' => $row[17],
            'v4g' => $row[18],
            'portn' => $row[19],
            'ipo' => $row[20],
            'bwt' => $row[21],
            'oam' => $row[22],
            'odp' => $row[23],
            'remark' => $row[24],
            'tdes' => $row[25],
            'ket' => $row[26]
        ]);
    }
}
