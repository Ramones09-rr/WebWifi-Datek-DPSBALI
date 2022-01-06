@extends('layouts.app')
<title>Web WDAC | Detail Datek</title>
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
        <h1>Detail Datek</h1>
        <hr>

        <dl class="row">
            @foreach ($detail as $detail)
            <dt class="col-sm-3">SN</dt>
            <dd class="col-sm-9">: {{ $detail->sn }}</dd>

            <dt class="col-sm-3">Mac Address</dt>
            <dd class="col-sm-9">: {{ $detail->mac }}</dd>

            <dt class="col-sm-3">STO</dt>
            <dd class="col-sm-9">: {{ $detail->sto }}</dd>

            <dt class="col-sm-3">Log ID</dt>
            <dd class="col-sm-9">: {{ $detail->log }}</dd>

            <dt class="col-sm-3">AP Name</dt>
            <dd class="col-sm-9">:  {{ $detail->ap }}</dd>

            <dt class="col-sm-3">Alamat</dt>
            <dd class="col-sm-9">: {{ $detail->alamat }}</dd>

            <dt class="col-sm-3">SN ONT</dt>
            <dd class="col-sm-9">: {{ $detail->ont }}</dd>

            <dt class="col-sm-3">Lokasi ONT</dt>
            <dd class="col-sm-9">: {{ $detail->lokasi }}</dd>

            <dt class="col-sm-3">Type OLT</dt>
            <dd class="col-sm-9">: {{ $detail->olt }}</dd>

            <dt class="col-sm-3">GPON</dt>
            <dd class="col-sm-9">: {{ $detail->gpon }}</dd>

            <dt class="col-sm-3">GPON ONU</dt>
            <dd class="col-sm-9">: {{ $detail->onu }}</dd>

            <dt class="col-sm-3">VLAN</dt>
            <dd class="col-sm-9">: {{ $detail->vlan }}</dd>

            <dt class="col-sm-3">Status AP</dt>
            <dd class="col-sm-9">: {{ $detail->status }}</dd>

            <dt class="col-sm-3">ODP</dt>
            <dd class="col-sm-9">: {{ $detail->odp }}</dd>
             @endforeach
        </dl>

        <div class="mt-2">
            <a href="{{ route('datek.index') }}" class="btn btn-secondary mb-3">Back</a>
        </div>
    </div>
</div>

@endsection
