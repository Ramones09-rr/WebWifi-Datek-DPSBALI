@extends('layouts.app')
<title>Web WDAC | Input Rehab</title>
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
                        <a class="nav-link" href="{{ route('laporan.index') }}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rehab.index') }}" id='link-active'>Rehab</a>
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
        <h1>Input Rehab</h1>
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

                <form class="row g-3" method="POST" action="{{ route('rehab.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Periode</label>
                    <input list="periodeOptions" value="{{ Request::old('periode') }}" class="form-control" name="periode" id="periode" placeholder="Pilih Periode">
                    <datalist id="periodeOptions">
                        <option value="JANUARI ">
                        <option value="FEBRUARI ">
                        <option value="MARET ">
                        <option value="APRIL ">
                        <option value="MEI ">
                        <option value="JUNI ">
                        <option value="JULI ">
                        <option value="AGUSTUS ">
                        <option value="SEPTEMBER ">
                        <option value="OKTOBER ">
                        <option value="NOVEMBER ">
                        <option value="DESEMBER ">
                    </datalist>
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Total AP</label>
                    <input type="text" value="{{ Request::old('tap') }}" class="form-control" name="tap" id="tap">
                </div>

                <div class="col-sm-12 mt-3">
                    <label for="" class="font-weight-bold">File</label>
                    <input type="file" value="{{ Request::old('evi') }}" class="form-control" name="evi" id="evi" style="height: 43px">
                </div>

                <div class="col-sm-12 mt-4">
                    <a href="{{ route('rehab.index') }}" class="btn btn-secondary">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
