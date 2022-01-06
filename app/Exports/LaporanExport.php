<?php

namespace App\Exports;

use App\Models\Laporan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class LaporanExport implements FromView
{
    public function view(): View
    {
        $laporan = Laporan::all();
        // $timestamp = Laporan::select('ttt')->get();
        // $arr = array();
        // foreach ($timestamp as $key=>$value) {
        //     $laporan[$key]->tanggalTrue = date("d-m-Y H:i:s", strtotime($value->ttt));
        // }

        return view('laporan.export', [
            'laporan' => $laporan
        ]);
    }
}
