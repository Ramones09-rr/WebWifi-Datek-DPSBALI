<?php

namespace App\Exports;

use App\Models\Datek;
use Illuminate\Contracts\View\View as ViewView;
use Maatwebsite\Excel\Concerns\FromView;

class DatekExport implements FromView
{
    public function view(): ViewView
    {
        return view('datek.export', [
            'datek' => Datek::all()
        ]);
    }
}
