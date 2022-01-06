<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\LaporanImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Data Laporan";
        $laporan = Laporan::all();
        $created_at = Laporan::select('created_at')->get();

        $array_collection_created_date = array();

        foreach ($created_at as $key => $value) {
            $laporan[$key]->created = str_replace('T', ' ', $value->created_at);
            $laporan[$key]->created = substr($value->created_at, 0, 19);
            $laporan[$key]->created = date("d-m-Y", strtotime($value->created_at));

            $array_collection_created_date[] = $laporan[$key]->created;
        }

        $collection_created_date = array_unique($array_collection_created_date);
        $laporan->collection_created_date = $collection_created_date;

        return view('laporan.index', compact('pageTitle', 'laporan'));
    }

    public function laporanexport(){
        return Excel::download(new LaporanExport, 'Data Laporan.xlsx');
    }

    public function laporanimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('data_laporan', $namaFile);

        Excel::import(new LaporanImport, public_path('/data_laporan/'.$namaFile));
        return redirect('/laporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('laporan.create');
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
            'notik' => 'required',
            'assign' => 'required',
            'nama' => 'required',
            'site' => 'required',
            'snap' => 'required',
            'snont' => 'required',
            'cp' => 'required',
            'st' => 'required',
            'lokasi' => 'required',
            'status' => '',
            'ttt' => 'required',
            'ket' => ''
        ]);

        $laporan = new Laporan();
        $laporan->notik = $request->notik;
        $laporan->assign = $request->assign;
        $laporan->nama = $request->nama;
        $laporan->site = $request->site;
        $laporan->snap = $request->snap;
        $laporan->snont = $request->snont;
        $laporan->cp = $request->cp;
        $laporan->st = $request->st;
        $laporan->lokasi = $request->lokasi;
        $laporan->status = $request->status;
        $laporan->ttt = $request->ttt;
        $laporan->ket = $request->ket;
        $laporan->save();

        return redirect()->route('laporan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_laporan = Laporan::where('id', $id)->get();

        return view('laporan.show')->with('detail', $detail_laporan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporanId = $id;
        $laporan = DB::table('laporan')->where('id', $laporanId)->first();

        return view('laporan.edit', compact('laporanId', 'laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'notik' => 'required',
            'assign' => 'required',
            'nama' => 'required',
            'site' => 'required',
            'snap' => 'required',
            'snont' => 'required',
            'cp' => 'required',
            'st' => 'required',
            'lokasi' => 'required',
            'status' => '',
            'ttt' => 'required',
            'ket' => ''
        ]);

        $laporan = Laporan::find($id);
        $laporan->notik = $request->notik;
        $laporan->assign = $request->assign;
        $laporan->nama = $request->nama;
        $laporan->site = $request->site;
        $laporan->snap = $request->snap;
        $laporan->snont = $request->snont;
        $laporan->cp = $request->cp;
        $laporan->st = $request->st;
        $laporan->lokasi = $request->lokasi;
        $laporan->status = $request->status;
        $laporan->ttt = $request->ttt;
        $laporan->ket = $request->ket;
        $laporan->save();

        return redirect()->route('laporan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Laporan::destroy($id);

        return redirect()->route('laporan.index');
    }

    public function getData()
    {
        $laporan = Laporan::all();
        $created_at = Laporan::select('created_at')->get();

        foreach ($created_at as $key => $value) {
            $laporan[$key]->created = str_replace('T', ' ', $value->created_at);
            $laporan[$key]->created = substr($value->created_at, 0, 19);
            $laporan[$key]->created = date("d-m-Y H:i:s", strtotime($value->created_at));
        }

        return DataTables::of($laporan)
            ->addColumn('action', function($laporan) {
                return view('laporan.action', compact('laporan'));
            })
            ->make(true);
    }
}
