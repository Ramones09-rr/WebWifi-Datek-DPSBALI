<?php

namespace App\Imports;

use App\Models\Datin;
use Maatwebsite\Excel\Concerns\ToModel;

class DatinImport implements ToModel
{
    public function model(array $row)
    {
        return new Datin([
            'th' => $row[1],
            'am' => $row[2],
            'segmen' => $row[3],
            'sub' => $row[4],
            'cust' => $row[5],
            'project' => $row[6],
            'produk' => $row[7],
            'qty' => $row[8],
            'satuan' => $row[9],
            'otc' => $row[10],
            'rec' => $row[11],
            'tk' => $row[12],
            'sca' => $row[13],
            'jml' => $row[14],
            'bln' => $row[15],
            'bill' => $row[16],
            'status' => $row[17],
            'level' => $row[18],
            'progress' => $row[19],
            'ko' => $row[20],
            'nks' => $row[21],
            'channel' => $row[22],
            'divre' => $row[23],
            'witel' => $row[24],
            'mitra' => $row[25],
            'masa' => $row[26],
            'ket' => $row[27]
        ]);
    }
}
