<?php

namespace App\Http\Controllers;

use App\Models\Rehab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class RehabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Data Rehab";

        return view('rehab.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('rehab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'periode' => 'required',
            'tap' => 'required',
            'evi' => 'required',
        ]);

        $file = $request->file('evi');
        $fileevi = $file->getClientOriginalName();

        $fileeviUnique = $file->store('documents');

        $rehab = new Rehab();
        $rehab->periode = $request->periode;
        $rehab->tap = $request->tap;
        $rehab->fileevi = $fileevi;
        $rehab->fileevi_unique = explode('/', $fileeviUnique)[1];
        $rehab->save();

        return redirect()->route('rehab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rehab  $rehab
     * @return \Illuminate\Http\Response
     */
    public function show(Rehab $rehab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rehab  $rehab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rehab  $rehab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rehab  $rehab
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function getData()
    {
        $rehab = Rehab::all();
        $created_at = Rehab::select('created_at')->get();

        foreach ($created_at as $key => $value) {
            $rehab[$key]->created = str_replace('T', ' ', $value->created_at);
            $rehab[$key]->created = substr($value->created_at, 0, 19);
            $rehab[$key]->created = date("d-m-Y H:i:s", strtotime($value->created_at));
        }

        return DataTables::of($rehab)
            ->editColumn('fileevi_unique', function($rehab) {
                return '<a href="'.route('rehab.download', ['file' => $rehab->fileevi_unique]).'" class="btn btn-sm btn-outline-success">Download</a>';
            })
            ->addColumn('actions', function($rehab) {
                return view('rehab.action', compact('rehab'));
            })
            ->rawColumns(['fileevi_unique'])
            ->make(true);
    }

    public function download($fileeviUnique)
    {
        return Storage::download('documents/'.$fileeviUnique, 'LAP REHAB AP WITEL DPR .rar');
    }
}
