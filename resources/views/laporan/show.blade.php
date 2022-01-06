@extends('layouts.app')
<title>Web WDAC | Detail Laporan</title>
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
        <h1>Detail Laporan</h1>
        <hr>

        <dl class="row">
            @foreach ($detail as $detail)
            <dt class="col-sm-3">Notik</dt>
            <dd class="col-sm-9">: {{ $detail->notik }}</dd>

            <dt class="col-sm-3">Assign</dt>
            <dd class="col-sm-9">: {{ $detail->assign }}</dd>

            <dt class="col-sm-3">Nama</dt>
            <dd class="col-sm-9">: {{ $detail->nama }}</dd>

            <dt class="col-sm-3">SN AP</dt>
            <dd class="col-sm-9">:  {{ $detail->snap }}</dd>

            <dt class="col-sm-3">Site ID</dt>
            <dd class="col-sm-9">: {{ $detail->site }}</dd>

            <dt class="col-sm-3">SN ONT</dt>
            <dd class="col-sm-9">: {{ $detail->snont }}</dd>

            <dt class="col-sm-3">CP</dt>
            <dd class="col-sm-9">: {{ $detail->cp }}</dd>

            <dt class="col-sm-3">Status Tiket</dt>
            <dd class="col-sm-9">: {{ $detail->st }}</dd>

            <dt class="col-sm-3">Lokasi</dt>
            <dd class="col-sm-9">: {{ $detail->lokasi }}</dd>

            <dt class="col-sm-3">Status</dt>
            <dd class="col-sm-9">: {{ $detail->status }}</dd>

            <dt class="col-sm-3">Tanggal Terbit Tiket</dt>
            <dd class="col-sm-9">: {{ $detail->ttt }}</dd>

            <dt class="col-sm-3">Keterangan</dt>
            <dd class="col-sm-9">: {{ $detail->ket }}</dd>
            @endforeach
        </dl>

        <div class="mt-2">
            <a href="{{ route('laporan.index') }}" class="btn btn-secondary mr-2">Back</a>
        </div>
    </div>
</div>

@endsection
