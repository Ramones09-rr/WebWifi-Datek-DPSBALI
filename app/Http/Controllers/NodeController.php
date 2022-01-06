<?php

namespace App\Http\Controllers;

use App\Exports\NodeExport;
use App\Imports\NodeImport;
use App\Models\Node;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class NodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Data Node B";
        $node = Node::all();

        return view('node.index', compact('pageTitle', 'node'));
    }

    public function nodeexport(){
        return Excel::download(new NodeExport, 'Data BTS Node B.xlsx');
    }

    public function nodeimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('data_node', $namaFile);

        Excel::import(new NodeImport, public_path('/data_node/'.$namaFile));
        return redirect('/node');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('node.create');
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
            'sname' => '',
            'sadd' => '',
            'sid' => 'required',
            'hsn' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'akses' => 'required',
            'system' => '',
            'hsi' => '',
            'dme' => 'required',
            'oname' => 'required',
            'oport' => '',
            'ptct' => 'required',
            'sn' => 'required',
            'ont' => 'required',
            'v2g' => '',
            'v3g' => '',
            'v4g' => '',
            'portn' => 'required',
            'ipo' => '',
            'bwt' => '',
            'oam' => '',
            'odp' => 'required',
            'remark' => '',
            'tdes' => '',
            'ket' => ''
        ]);

        $node = new Node();
        $node->sname = $request->sname;
        $node->sadd = $request->sadd;
        $node->sid = $request->sid;
        $node->hsn = $request->hsn;
        $node->lat = $request->lat;
        $node->long = $request->long;
        $node->akses = $request->akses;
        $node->system = $request->system;
        $node->hsi = $request->hsi;
        $node->dme = $request->dme;
        $node->oname = $request->oname;
        $node->oport = $request->oport;
        $node->ptct = $request->ptct;
        $node->sn = $request->sn;
        $node->ont = $request->ont;
        $node->v2g = $request->v2g;
        $node->v3g = $request->v3g;
        $node->v4g = $request->v4g;
        $node->portn = $request->portn;
        $node->ipo = $request->ipo;
        $node->bwt = $request->bwt;
        $node->oam = $request->oam;
        $node->odp = $request->odp;
        $node->remark = $request->remark;
        $node->tdes = $request->tdes;
        $node->ket = $request->ket;
        $node->save();

        return redirect()->route('node.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_node = Node::where('id', $id)->get();

        return view('node.show')->with('detail', $detail_node);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nodeId = $id;
        $node = DB::table('node')->where('id', $nodeId)->first();

        return view('node.edit', compact('nodeId', 'node'));
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
            'sname' => '',
            'sadd' => '',
            'sid' => 'required',
            'hsn' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'akses' => 'required',
            'system' => '',
            'hsi' => '',
            'dme' => 'required',
            'oname' => 'required',
            'oport' => '',
            'ptct' => 'required',
            'sn' => 'required',
            'ont' => 'required',
            'v2g' => '',
            'v3g' => '',
            'v4g' => '',
            'portn' => 'required',
            'ipo' => '',
            'bwt' => '',
            'oam' => '',
            'odp' => 'required',
            'remark' => '',
            'tdes' => '',
            'ket' => ''
        ]);

        $node = Node::find($id);
        $node->sname = $request->sname;
        $node->sadd = $request->sadd;
        $node->sid = $request->sid;
        $node->hsn = $request->hsn;
        $node->lat = $request->lat;
        $node->long = $request->long;
        $node->akses = $request->akses;
        $node->system = $request->system;
        $node->hsi = $request->hsi;
        $node->dme = $request->dme;
        $node->oname = $request->oname;
        $node->oport = $request->oport;
        $node->ptct = $request->ptct;
        $node->sn = $request->sn;
        $node->ont = $request->ont;
        $node->v2g = $request->v2g;
        $node->v3g = $request->v3g;
        $node->v4g = $request->v4g;
        $node->portn = $request->portn;
        $node->ipo = $request->ipo;
        $node->bwt = $request->bwt;
        $node->oam = $request->oam;
        $node->odp = $request->odp;
        $node->remark = $request->remark;
        $node->tdes = $request->tdes;
        $node->ket = $request->ket;
        $node->save();

        return redirect()->route('node.index');
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
        $node = Node::all();

        return DataTables::of($node)
            ->addColumn('aksi', function($node) {
                return view('node.action', compact('node'));
            })
            ->make(true);
    }
}
