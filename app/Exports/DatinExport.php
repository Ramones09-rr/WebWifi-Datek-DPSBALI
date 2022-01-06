<?php

namespace App\Exports;

use App\Models\Datin;
use Illuminate\Contracts\View\View as ViewView;
use Maatwebsite\Excel\Concerns\FromView;

class DatinExport implements FromView
{
    public function view(): ViewView
    {
        return view('datin.export', [
            'datin' => Datin::all()
        ]);
    }
}
