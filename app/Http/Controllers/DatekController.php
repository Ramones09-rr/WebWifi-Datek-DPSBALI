<?php

namespace App\Http\Controllers;

use App\Exports\DatekExport;
use App\Imports\DatekImport;
use App\Models\Datek;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class DatekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Data Teknis";
        $datek = Datek::all();

        return view('datek.index', compact('pageTitle', 'datek'));
    }

    public function datekexport(){
        return Excel::download(new DatekExport, 'Data Teknis.xlsx');
    }

    public function datekimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('data_datek', $namaFile);

        Excel::import(new DatekImport, public_path('/data_datek/'.$namaFile));
        return redirect('/datek');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('datek.create');
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
            'sn' => 'required',
            'mac' => 'required',
            'sto' => 'required',
            'log' => '',
            'ap' => 'required',
            'alamat' => '',
            'ont' => '',
            'lokasi' => '',
            'olt' => '',
            'gpon' => 'required',
            'onu' => 'required',
            'vlan' => 'required',
            'status' => 'required',
            'odp' => ''
        ]);

        $datek = new Datek();
        $datek->sn = $request->sn;
        $datek->mac = $request->mac;
        $datek->sto = $request->sto;
        $datek->log = $request->log;
        $datek->ap = $request->ap;
        $datek->alamat = $request->alamat;
        $datek->ont = $request->ont;
        $datek->lokasi = $request->lokasi;
        $datek->olt = $request->olt;
        $datek->gpon = $request->gpon;
        $datek->onu = $request->onu;
        $datek->vlan = $request->vlan;
        $datek->status = $request->status;
        $datek->odp = $request->odp;
        $datek->save();

        return redirect()->route('datek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_datek = Datek::where('id', $id)->get();

        return view('datek.show')->with('detail', $detail_datek);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datekId = $id;
        $datek = DB::table('datek')->where('id', $datekId)->first();

        return view('datek.edit', compact('datekId', 'datek'));
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
            'sn' => 'required',
            'mac' => 'required',
            'sto' => 'required',
            'log' => '',
            'ap' => 'required',
            'alamat' => '',
            'ont' => '',
            'lokasi' => '',
            'olt' => '',
            'gpon' => 'required',
            'onu' => 'required',
            'vlan' => 'required',
            'status' => 'required',
            'odp' => ''
        ]);

        $datek = Datek::find($id);
        $datek->sn = $request->sn;
        $datek->mac = $request->mac;
        $datek->sto = $request->sto;
        $datek->log = $request->log;
        $datek->ap = $request->ap;
        $datek->alamat = $request->alamat;
        $datek->ont = $request->ont;
        $datek->lokasi = $request->lokasi;
        $datek->olt = $request->olt;
        $datek->gpon = $request->gpon;
        $datek->onu = $request->onu;
        $datek->vlan = $request->vlan;
        $datek->status = $request->status;
        $datek->odp = $request->odp;
        $datek->save();

        return redirect()->route('datek.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getData()
    {
        $datek = Datek::all();

        return DataTables::of($datek)
            ->addColumn('aksi', function($datek) {
                return view('datek.action', compact('datek'));
            })
            ->make(true);
    }
}
