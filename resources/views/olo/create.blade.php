@extends('layouts.app')
<title>Web WDAC | Input OLO</title>
@section('content')

<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Web WDAC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('olo.index') }}" id='link-active'>OLO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('node.index') }}">Node B</a>
                    </li>
                @endauth
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Om Swastyastu, {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container p-4 bg-white rounded shadow-sm">
        <h1>Input OLO</h1>
        <hr>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row">
            <div class="col">

                <form class="row g-3" method="POST" action="{{ route('olo.store') }}">
                @csrf

                <div class="col-md-5">
                    <label for="" class="font-weight-bold">No Ticaters</label>
                    <input type="text" value="{{ Request::old('notic') }}" class="form-control" name="notic" id="notic">
                </div>

                <div class="col-md-4">
                    <label for="" class="font-weight-bold">Tanggal Start</label>
                    <input type="text" value="{{ Request::old('ts') }}" class="form-control" name="ts" id="ts" placeholder="dd-mm-yyyy">
                </div>

                <div class="col-md-3">
                    <label for="" class="font-weight-bold">Tanggal Close</label>
                    <input type="text" value="{{ Request::old('tc') }}" class="form-control" name="tc" id="tc" placeholder="dd-mm-yyyy">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Customer</label>
                    <input type="text" value="{{ Request::old('cust') }}" class="form-control" name="cust" id="cust">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Jenis Instalasi</label>
                    <input list="jinOptions" value="{{ Request::old('jin') }}" class="form-control" name="jin" id="jin"  placeholder="Pilih Jenis Instalasi">
                    <datalist id="jinOptions">
                        <option value="DISCONNECT">
                        <option value="MODIFY">
                        <option value="NEW INSTALL">
                    </datalist>
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">BW (Mbps)</label>
                    <input type="text" value="{{ Request::old('bw') }}" class="form-control" name="bw" id="bw">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Network ID</label>
                    <input type="text" value="{{ Request::old('nid') }}" class="form-control" name="nid" id="nid">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Service ID</label>
                    <input type="text" value="{{ Request::old('sid') }}" class="form-control" name="sid" id="sid">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">External ID</label>
                    <input type="text" value="{{ Request::old('xid') }}" class="form-control" name="xid" id="xid">
                </div>

                <div class="col-12 mt-3">
                    <label for="" class="font-weight-bold">Alamat Node</label>
                    <input type="text" value="{{ Request::old('alamat') }}" class="form-control" name="alamat" id="alamat">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Longitude</label>
                    <input type="text" value="{{ Request::old('long') }}" class="form-control" name="long" id="long">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Latitude</label>
                    <input type="text" value="{{ Request::old('lat') }}" class="form-control" name="lat" id="lat">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">NTE Type</label>
                    <input list="nteOptions" value="{{ Request::old('nte') }}" class="form-control" name="nte" id="nte"  placeholder="Pilih NTE Type">
                    <datalist id="nteOptions">
                        <option value="ASTINET">
                        <option value="DirectME">
                        <option value="DirectPE">
                        <option value="DWDM">
                        <option value="ISDN PRA">
                        <option value="L2SW">
                        <option value="METRO">
                        <option value="ODP">
                        <option value="ONT">
                        <option value="SL_WDM">
                        <option value="TRANSIT">
                    </datalist>
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Type & Konfigurasi Network</label>
                    <input type="text" value="{{ Request::old('type') }}" class="form-control" name="type" id="type">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Product</label>
                    <input list="prodOptions" value="{{ Request::old('product') }}" class="form-control" name="product" id="product"  placeholder="Pilih Product">
                    <datalist id="prodOptions">
                        <option value="ASTINET">
                        <option value="INF_IPPBX">
                        <option value="INF_SL">
                        <option value="IP Transit">
                        <option value="Metro">
                        <option value="New Inter">
                        <option value="VPN IP">
                    </datalist>
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Jenis Layanan</label>
                    <input list="jlaOptions" value="{{ Request::old('jla') }}" class="form-control" name="jla" id="jla"  placeholder="Pilih Jenis Layanan">
                    <datalist id="jlaOptions">
                        <option value="BACKHAUL">
                        <option value="Ethernet">
                        <option value="P2MP">
                        <option value="P2P">
                    </datalist>
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">STO</label>
                    <input list="stoOptions" value="{{ Request::old('sto') }}" class="form-control" name="sto" id="sto"  placeholder="Pilih STO">
                    <datalist id="stoOptions">
                        <option value="BNO">
                        <option value="JBR">
                        <option value="KLM">
                        <option value="KUT">
                        <option value="MMN">
                        <option value="NDA">
                        <option value="NSD">
                        <option value="SAU">
                        <option value="SMY">
                        <option value="SWI">
                        <option value="TOP">
                        <option value="UBG">
                        <option value="UBN">
                    </datalist>
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Metro</label>
                    <input type="text" value="{{ Request::old('metro') }}" class="form-control" name="metro" id="metro">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Port Metro</label>
                    <input type="text" value="{{ Request::old('portm') }}" class="form-control" name="portm" id="portm">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">OLT</label>
                    <input type="text" value="{{ Request::old('olt') }}" class="form-control" name="olt" id="olt">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Port OLT</label>
                    <input type="text" value="{{ Request::old('portl') }}" class="form-control" name="portl" id="portl">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">ODP</label>
                    <input type="text" value="{{ Request::old('odp') }}" class="form-control" name="odp" id="odp">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">ONT Model</label>
                    <input type="text" value="{{ Request::old('ont') }}" class="form-control" name="ont" id="ont">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Port ONT</label>
                    <input type="text" value="{{ Request::old('portn') }}" class="form-control" name="portn" id="portn">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">SN ONT</label>
                    <input type="text" value="{{ Request::old('sn') }}" class="form-control" name="sn" id="sn">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">VLAN</label>
                    <input type="text" value="{{ Request::old('vlan') }}" class="form-control" name="vlan" id="vlan">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">OA | Dismantle</label>
                    <input type="text" value="{{ Request::old('oa') }}" class="form-control" name="oa" id="oa">
                </div>

                <div class="col-12 mt-3 mb-2">
                    <label for="" class="font-weight-bold">Keterangan</label>
                    <input type="text" value="{{ Request::old('ket') }}" class="form-control" name="ket" id="ket">
                </div>

                <div class="col-sm-12 mt-4">
                    <a href="{{ route('olo.index') }}" class="btn btn-secondary">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
