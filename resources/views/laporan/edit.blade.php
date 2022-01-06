@extends('layouts.app')
<title>Web WDAC | Update Laporan</title>
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
                        <a class="nav-link" href="{{ route('datek.index') }}">Datek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('laporan.index') }}" id='link-active'>Laporan</a>
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
        <h1>Update Laporan</h1>
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

                <form class="row g-3" method="POST" action="{{ route('laporan.update', $laporanId) }}">
                @csrf
                @method('put')

                <div class="col-md-5 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">Notik</label>
                    <input type="text" value="{{ $laporan->notik }}" class="form-control" name="notik" id="notik" readonly>
                </div>

                <div class="col-md-4 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">Assign</label>
                    <input type="text" value="{{ $laporan->assign }}" class="form-control" name="assign" id="assign" readonly>
                </div>

                <div class="col-md-3 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">Nama</label>
                    <input type="text" value="{{ $laporan->nama }}" class="form-control" name="nama" id="nama" readonly>
                </div>

                <div class="col-md-4 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">SN AP</label>
                    <input type="text" value="{{ $laporan->snap }}" class="form-control" name="snap" id="snap" readonly>
                </div>

                <div class="col-md-3 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">SN ONT</label>
                    <input type="text" value="{{ $laporan->snont }}" class="form-control" name="snont" id="snont" readonly>
                </div>
                
                <div class="col-md-5 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">Site ID</label>
                    <input type="text" value="{{ $laporan->site }}" class="form-control" name="site" id="site" readonly>
                </div>

                <div class="col-12 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">Lokasi</label>
                    <input type="text" value="{{ $laporan->lokasi }}" class="form-control" name="lokasi" id="lokasi" readonly>
                </div>

                <div class="col-md-5 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">CP</label>
                    <input list="cpOptions" value="{{ $laporan->cp }}" class="form-control" name="cp" id="cp" placeholder="Type to search..." readonly>
                    <datalist id="cpOptions">
                        <option value="Open By Tech">
                    </datalist>
                </div>

                <div class="col-md-4 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">Status Tiket</label>
                    <input list="stOptions" value="{{ $laporan->st }}" class="form-control" name="st" id="st" placeholder="Type to search..." readonly>
                    <datalist id="stOptions">
                        <option value="AKTIF">
                        <option value="REAKTIF">
                    </datalist>
                </div>

                <div class="col-md-3 mt-3">
                    <label for="disabledTextInput" class="font-weight-bold">Tanggal Terbit Tiket</label>
                    <input type="text" value="{{ $laporan->ttt }}" class="form-control" name="ttt" id="ttt" readonly>
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Status</label>
                    <input list="statusOptions" value="{{ $laporan->status }}" class="form-control" name="status" id="status" placeholder="Type to search...">
                    <datalist id="statusOptions">
                        <option value="Close">
                    </datalist>
                </div>

                <div class="col-sm-6 mt-3 mb-2">
                    <label for="" class="font-weight-bold">Keterangan</label>
                    <input type="text" value="{{ $laporan->ket }}" class="form-control" name="ket" id="ket">
                </div>

                <div class="col-sm-12 mt-4">
                    <a href="{{ route('laporan.index') }}" class="btn btn-secondary">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
