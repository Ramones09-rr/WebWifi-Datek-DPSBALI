<?php

namespace App\Exports;

use App\Models\Node;
use Illuminate\Contracts\View\View as ViewView;
use Maatwebsite\Excel\Concerns\FromView;

class NodeExport implements FromView
{
    public function view(): ViewView
    {
        return view('node.export', [
            'node' => Node::all()
        ]);
    }
}
