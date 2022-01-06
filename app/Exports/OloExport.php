<?php

namespace App\Exports;

use App\Models\Olo;
use Illuminate\Contracts\View\View as ViewView;
use Maatwebsite\Excel\Concerns\FromView;

class OloExport implements FromView
{
    public function view(): ViewView
    {
        return view('olo.export', [
            'olo' => Olo::all()
        ]);
    }
}
