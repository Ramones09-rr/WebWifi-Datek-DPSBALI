<?php

namespace App\Http\Controllers;

use App\Exports\OloExport;
use App\Imports\OloImport;
use App\Models\Olo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class OloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Data OLO";
        $olo = Olo::all();

        return view('olo.index', compact('pageTitle', 'olo'));
    }

    public function oloexport(){
        return Excel::download(new OloExport, 'Data BTS OLO.xlsx');
    }

    public function oloimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('data_olo', $namaFile);

        Excel::import(new OloImport, public_path('/data_olo/'.$namaFile));
        return redirect('/olo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('olo.create');
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
            'notic' => 'required',
            'ts' => '',
            'tc' => '',
            'cust' => 'required',
            'nid' => '',
            'sid' => '',
            'xid' => '',
            'jin' => '',
            'bw' => '',
            'alamat' => '',
            'long' => '',
            'lat' => '',
            'nte' => '',
            'type' => '',
            'product' => '',
            'jla' => '',
            'sto' => '',
            'metro' => '',
            'portm' => '',
            'olt' => '',
            'portl' => '',
            'odp' => '',
            'ont' => '',
            'portn' => '',
            'sn' => '',
            'vlan' => '',
            'oa' => '',
            'ket' => ''
        ]);

        $olo = new Olo();
        $olo->notic = $request->notic;
        $olo->ts = $request->ts;
        $olo->tc = $request->tc;
        $olo->cust = $request->cust;
        $olo->nid = $request->nid;
        $olo->sid = $request->sid;
        $olo->xid = $request->xid;
        $olo->jin = $request->jin;
        $olo->bw = $request->bw;
        $olo->alamat = $request->alamat;
        $olo->long = $request->long;
        $olo->lat = $request->lat;
        $olo->nte = $request->nte;
        $olo->type = $request->type;
        $olo->product = $request->product;
        $olo->jla = $request->jla;
        $olo->sto = $request->sto;
        $olo->metro = $request->metro;
        $olo->portm = $request->portm;
        $olo->olt = $request->olt;
        $olo->portl = $request->portl;
        $olo->odp = $request->odp;
        $olo->ont = $request->ont;
        $olo->portn = $request->portn;
        $olo->sn = $request->sn;
        $olo->vlan = $request->vlan;
        $olo->oa = $request->oa;
        $olo->ket = $request->ket;
        $olo->save();

        return redirect()->route('olo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_olo = Olo::where('id', $id)->get();

        return view('olo.show')->with('detail', $detail_olo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oloId = $id;
        $olo = DB::table('olo')->where('id', $oloId)->first();

        return view('olo.edit', compact('oloId', 'olo'));
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
            'notic' => 'required',
            'ts' => '',
            'tc' => '',
            'cust' => 'required',
            'nid' => '',
            'sid' => '',
            'xid' => '',
            'jin' => '',
            'bw' => '',
            'alamat' => '',
            'long' => '',
            'lat' => '',
            'nte' => '',
            'type' => '',
            'product' => '',
            'jla' => '',
            'sto' => '',
            'metro' => '',
            'portm' => '',
            'olt' => '',
            'portl' => '',
            'odp' => '',
            'ont' => '',
            'portn' => '',
            'sn' => '',
            'vlan' => '',
            'oa' => '',
            'ket' => ''
        ]);

        $olo = Olo::find($id);
        $olo->notic = $request->notic;
        $olo->ts = $request->ts;
        $olo->tc = $request->tc;
        $olo->cust = $request->cust;
        $olo->nid = $request->nid;
        $olo->sid = $request->sid;
        $olo->xid = $request->xid;
        $olo->jin = $request->jin;
        $olo->bw = $request->bw;
        $olo->alamat = $request->alamat;
        $olo->long = $request->long;
        $olo->lat = $request->lat;
        $olo->nte = $request->nte;
        $olo->type = $request->type;
        $olo->product = $request->product;
        $olo->jla = $request->jla;
        $olo->sto = $request->sto;
        $olo->metro = $request->metro;
        $olo->portm = $request->portm;
        $olo->olt = $request->olt;
        $olo->portl = $request->portl;
        $olo->odp = $request->odp;
        $olo->ont = $request->ont;
        $olo->portn = $request->portn;
        $olo->sn = $request->sn;
        $olo->vlan = $request->vlan;
        $olo->oa = $request->oa;
        $olo->ket = $request->ket;
        $olo->save();

        return redirect()->route('olo.index');
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
        $olo = Olo::all();

        return DataTables::of($olo)
            ->addColumn('aksi', function($olo) {
                return view('olo.action', compact('olo'));
            })
            ->make(true);
    }
}
