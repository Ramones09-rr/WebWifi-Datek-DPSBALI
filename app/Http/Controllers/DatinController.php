<?php

namespace App\Http\Controllers;

use App\Exports\DatinExport;
use App\Imports\DatinImport;
use App\Models\Datin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class DatinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Data Internal";
        $datin = Datin::all();

        return view('datin.index', compact('pageTitle', 'datin'));
    }

    public function datinexport(){
        return Excel::download(new DatinExport, 'Data Internal.xlsx');
    }

    public function datinimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('data_datin', $namaFile);

        Excel::import(new DatinImport, public_path('/data_datin/'.$namaFile));
        return redirect('/datin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('datin.create');
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
            'th' => 'required',
            'am' => 'required',
            'segmen' => '',
            'sub' => '',
            'cust' => '',
            'project' => '',
            'produk' => '',
            'qty' => '',
            'satuan' => '',
            'otc' => '',
            'rec' => '',
            'tk' => '',
            'sca' => 'required',
            'jml' => '',
            'bln' => '',
            'bill' => '',
            'status' => '',
            'level' => '',
            'progress' => '',
            'ko' => '',
            'nks' => '',
            'channel' => '',
            'divre' => 'required',
            'witel' => 'required',
            'mitra' => '',
            'masa' => '',
            'ket' => ''
        ]);

        $datin = new Datin();
        $datin->th = $request->th;
        $datin->am = $request->am;
        $datin->segmen = $request->segmen;
        $datin->sub = $request->sub;
        $datin->cust = $request->cust;
        $datin->project = $request->project;
        $datin->produk = $request->produk;
        $datin->qty = $request->qty;
        $datin->satuan = $request->satuan;
        $datin->otc = $request->otc;
        $datin->rec = $request->rec;
        $datin->tk = $request->tk;
        $datin->sca = $request->sca;
        $datin->jml = $request->jml;
        $datin->bln = $request->bln;
        $datin->bill = $request->bill;
        $datin->status = $request->status;
        $datin->level = $request->level;
        $datin->progress = $request->progress;
        $datin->ko = $request->ko;
        $datin->nks = $request->nks;
        $datin->channel = $request->channel;
        $datin->divre = $request->divre;
        $datin->witel = $request->witel;
        $datin->mitra = $request->mitra;
        $datin->masa = $request->masa;
        $datin->ket = $request->ket;
        $datin->save();

        return redirect()->route('datin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datin  $datin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_datin = Datin::where('id', $id)->get();

        return view('datin.show')->with('detail', $detail_datin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datin  $datin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datinId = $id;
        $datin = DB::table('datin')->where('id', $datinId)->first();

        return view('datin.edit', compact('datinId', 'datin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datin  $datin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'th' => 'required',
            'am' => 'required',
            'segmen' => '',
            'sub' => '',
            'cust' => '',
            'project' => '',
            'produk' => '',
            'qty' => '',
            'satuan' => '',
            'otc' => '',
            'rec' => '',
            'tk' => '',
            'sca' => 'required',
            'jml' => '',
            'bln' => '',
            'bill' => '',
            'status' => '',
            'level' => '',
            'progress' => '',
            'ko' => '',
            'nks' => '',
            'channel' => '',
            'divre' => 'required',
            'witel' => 'required',
            'mitra' => '',
            'masa' => '',
            'ket' => ''
        ]);

        $datin = Datin::find($id);
        $datin->th = $request->th;
        $datin->am = $request->am;
        $datin->segmen = $request->segmen;
        $datin->sub = $request->sub;
        $datin->cust = $request->cust;
        $datin->project = $request->project;
        $datin->produk = $request->produk;
        $datin->qty = $request->qty;
        $datin->satuan = $request->satuan;
        $datin->otc = $request->otc;
        $datin->rec = $request->rec;
        $datin->tk = $request->tk;
        $datin->sca = $request->sca;
        $datin->jml = $request->jml;
        $datin->bln = $request->bln;
        $datin->bill = $request->bill;
        $datin->status = $request->status;
        $datin->level = $request->level;
        $datin->progress = $request->progress;
        $datin->ko = $request->ko;
        $datin->nks = $request->nks;
        $datin->channel = $request->channel;
        $datin->divre = $request->divre;
        $datin->witel = $request->witel;
        $datin->mitra = $request->mitra;
        $datin->masa = $request->masa;
        $datin->ket = $request->ket;
        $datin->save();

        return redirect()->route('datin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datin  $datin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datin $datin)
    {
        //
    }

    public function getData()
    {
        $datin = Datin::all();

        return DataTables::of($datin)
            ->addColumn('aksi', function($datin) {
                return view('datin.action', compact('datin'));
            })
            ->make(true);
    }
}
