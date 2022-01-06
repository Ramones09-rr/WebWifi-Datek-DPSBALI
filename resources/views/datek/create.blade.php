@extends('layouts.app')
<title>Web WDAC | Input Datek</title>
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
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('datek.index') }}" id='link-active'>Datek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('laporan.index') }}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rehab.index') }}">Rehab</a>
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
        <h1>Input Datek</h1>
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

                <form class="row g-3" method="POST" action="{{ route('datek.store') }}">
                @csrf

                <div class="col-md-5">
                    <label for="" class="font-weight-bold">SN</label>
                    <input type="text" value="{{ Request::old('sn') }}" class="form-control" name="sn" id="sn">
                </div>

                <div class="col-md-4">
                    <label for="" class="font-weight-bold">Mac Address</label>
                    <input type="text" value="{{ Request::old('mac') }}" class="form-control" name="mac" id="mac">
                </div>

                <div class="col-md-3">
                    <label for="" class="font-weight-bold">STO</label>
                    <input list="stoOptions" value="{{ Request::old('sto') }}" class="form-control" name="sto" id="sto" placeholder="Pilih STO">
                    <datalist id="stoOptions">
                        <option value="BLI">
                        <option value="BNO">
                        <option value="DPR">
                        <option value="GIN">
                        <option value="JBR">
                        <option value="KLM">
                        <option value="KUT">
                        <option value="MMN">
                        <option value="NDA">
                        <option value="SAU">
                        <option value="SMY">
                        <option value="SWI">
                        <option value="TBN">
                        <option value="TOP">
                        <option value="UBN">
                    </datalist>
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Log ID</label>
                    <input type="text" value="{{ Request::old('log') }}" class="form-control" name="log" id="log">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">AP Name</label>
                    <input type="text" value="{{ Request::old('ap') }}" class="form-control" name="ap" id="ap">
                </div>

                <div class="col-12 mt-3">
                    <label for="" class="font-weight-bold">Alamat</label>
                    <input type="text" value="{{ Request::old('alamat') }}" class="form-control" name="alamat" id="alamat" placeholder="Ruang | Gedung | Jalan">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">SN ONT</label>
                    <input type="text" value="{{ Request::old('ont') }}" class="form-control" name="ont" id="ont">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Lokasi ONT</label>
                    <input type="text" value="{{ Request::old('lokasi') }}" class="form-control" name="lokasi" id="lokasi">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Type OLT</label>
                    <input list="oltOptions" value="{{ Request::old('olt') }}" class="form-control" name="olt" id="olt" placeholder="Pilih Type OLT">
                    <datalist id="oltOptions">
                        <option value="ALU">
                        <option value="L2SW">
                        <option value="ZTE">
                    </datalist>
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">GPON</label>
                    <input type="text" value="{{ Request::old('gpon') }}" class="form-control" name="gpon" id="gpon">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">GPON ONU</label>
                    <input type="text" value="{{ Request::old('onu') }}" class="form-control" name="onu" id="onu">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">VLAN</label>
                    <input type="text" value="{{ Request::old('vlan') }}" class="form-control" name="vlan" id="vlan">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Status AP</label>
                    <input list="statusOptions" value="{{ Request::old('status') }}" class="form-control" name="status" id="status" placeholder="Pilih Status AP">
                    <datalist id="statusOptions">
                        <option value="AKTIF">
                        <option value="DISMANTLE">
                        <option value="HILANG">
                        <option value="RUSAK">
                    </datalist>
                </div>

                <div class="col-md-3 mt-3 mb-2">
                    <label for="" class="font-weight-bold">ODP</label>
                    <input type="text" value="{{ Request::old('odp') }}" class="form-control" name="odp" id="odp">
                </div>

                <div class="col-sm-12 mt-4">
                    <a href="{{ route('datek.index') }}" class="btn btn-secondary">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
