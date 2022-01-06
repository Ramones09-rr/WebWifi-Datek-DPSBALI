@extends('layouts.app')
<title>Web WDAC | Input Node B</title>
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
                        <a class="nav-link" href="{{ route('olo.index') }}">OLO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('node.index') }}" id='link-active'>Node B</a>
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
        <h1>Input Node B</h1>
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

                <form class="row g-3" method="POST" action="{{ route('node.store') }}">
                @csrf

                <div class="col-md-5">
                    <label for="" class="font-weight-bold">Site Name</label>
                    <input type="text" value="{{ Request::old('sname') }}" class="form-control" name="sname" id="sname">
                </div>

                <div class="col-md-4">
                    <label for="" class="font-weight-bold">Site ID</label>
                    <input type="text" value="{{ Request::old('sid') }}" class="form-control" name="sid" id="sid">
                </div>

                <div class="col-md-3">
                    <label for="" class="font-weight-bold">Hub Site Name</label>
                    <input type="text" value="{{ Request::old('hsn') }}" class="form-control" name="hsn" id="hsn">
                </div>

                <div class="col-12 mt-3">
                    <label for="" class="font-weight-bold">Site Address</label>
                    <input type="text" value="{{ Request::old('sadd') }}" class="form-control" name="sadd" id="sadd">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Latitude</label>
                    <input type="text" value="{{ Request::old('lat') }}" class="form-control" name="lat" id="lat">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Longitude</label>
                    <input type="text" value="{{ Request::old('long') }}" class="form-control" name="long" id="long">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Akses</label>
                    <input list="aksOptions" value="{{ Request::old('akses') }}" class="form-control" name="akses" id="akses"  placeholder="Pilih Akses">
                    <datalist id="aksOptions">
                        <option value="FO">
                        <option value="RADIO">
                    </datalist>
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">System</label>
                    <input type="text" value="{{ Request::old('system') }}" class="form-control" name="system" id="system">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Hub Site ID</label>
                    <input type="text" value="{{ Request::old('hsi') }}" class="form-control" name="hsi" id="hsi">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Datek Metro E</label>
                    <input type="text" value="{{ Request::old('dme') }}" class="form-control" name="dme" id="dme">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">OLT Name</label>
                    <input type="text" value="{{ Request::old('oname') }}" class="form-control" name="oname" id="oname">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">OLT Port</label>
                    <input type="text" value="{{ Request::old('oport') }}" class="form-control" name="oport" id="oport">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Plan Transport Co Trans</label>
                    <input list="ptctOptions" value="{{ Request::old('ptct') }}" class="form-control" name="ptct" id="ptct" placeholder="Pilih Plan Transport Co Trans">
                    <datalist id="ptctOptions">
                        <option value="IP-GPON">
                        <option value="IP-METROE">
                        <option value="IP-MW">
                    </datalist>
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">SN ONT</label>
                    <input type="text" value="{{ Request::old('sn') }}" class="form-control" name="sn" id="sn">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">ONT Version</label>
                    <input type="text" value="{{ Request::old('ont') }}" class="form-control" name="ont" id="ont">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">VLAN Cluster 2G</label>
                    <input type="text" value="{{ Request::old('v2g') }}" class="form-control" name="v2g" id="v2g">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">VLAN Cluster 3G</label>
                    <input type="text" value="{{ Request::old('v3g') }}" class="form-control" name="v3g" id="v3g">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">VLAN Cluster 4G</label>
                    <input type="text" value="{{ Request::old('v4g') }}" class="form-control" name="v4g" id="v4g">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Port ONT</label>
                    <input type="text" value="{{ Request::old('portn') }}" class="form-control" name="portn" id="portn">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">IP ONT</label>
                    <input type="text" value="{{ Request::old('ipo') }}" class="form-control" name="ipo" id="ipo">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">BW TOT</label>
                    <input type="text" value="{{ Request::old('bwt') }}" class="form-control" name="bwt" id="bwt">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">VLAN OAM</label>
                    <input type="text" value="{{ Request::old('oam') }}" class="form-control" name="oam" id="oam">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">ODP Name</label>
                    <input type="text" value="{{ Request::old('odp') }}" class="form-control" name="odp" id="odp">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Remark</label>
                    <input type="text" value="{{ Request::old('remark') }}" class="form-control" name="remark" id="remark">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Tagihan Des</label>
                    <input type="text" value="{{ Request::old('tdes') }}" class="form-control" name="tdes" id="tdes">
                </div>

                <div class="col-sm-6 mt-3 mb-2">
                    <label for="" class="font-weight-bold">Keterangan</label>
                    <input list="ketOptions" value="{{ Request::old('ket') }}" class="form-control" name="ket" id="ket" placeholder="Pilih Keterangan">
                    <datalist id="ketOptions">
                        <option value="DISMANTLE">
                        <option value="VALID">
                    </datalist>
                </div>

                <div class="col-sm-12 mt-4">
                    <a href="{{ route('node.index') }}" class="btn btn-secondary">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
