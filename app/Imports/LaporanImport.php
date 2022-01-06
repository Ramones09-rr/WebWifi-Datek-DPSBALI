<?php

namespace App\Imports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\ToModel;

class LaporanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // $date = new \DateTime();

        return new Laporan([
            'notik' => $row[1],
            'assign' => $row[2],
            'nama' => $row[3],
            'site' => $row[4],
            'snap' => $row[5],
            'snont' => $row[6],
            'cp' => $row[7],
            'st' => $row[8],
            'lokasi' => $row[9],
            'status' => $row[10],
            'ttt' => $row[11],
            'ket' => $row[12]
            // 'ttt' => $date->setTimestamp($row[11])->format('Y-m-d H:i:s'),
            // 'tgl' => $date->setTimestamp($row[13])->format('Y-m-d')
        ]);
    }
}
