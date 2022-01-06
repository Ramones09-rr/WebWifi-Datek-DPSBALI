@extends('layouts.app')
<title>Project Wifi | Search</title>
@section('content')

<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Project Wifi</a>
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
    <h1>Quick Search</h1>
    <hr>
    <body>
        <div class="container search">
            <form action="/search" method="POST" role="search">
            @csrf
                <div class="mb-3">
                    <label for="sn" class="form-label">Input SN</label>
                    <input type="text" class="form-control" id="sn" name="sn" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Check</button>
            </form>
        </div>

        <div class="container result">
            @if (isset($details))
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">SN</label>
                    <input type="text" class="form-control" id="sn" name="sn" readonly value="{{ $details->sn }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">AP Name</label>
                    <input type="text" class="form-control" id="ap" name="ap" readonly value="{{ $details->ap }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" readonly value="{{ $details->alamat }}">
                </div>
                <div class="row">
                    <div class="col-auto">
                        <label for="disabledTextInput" class="form-label">SN ONT</label>
                        <input type="text" class="form-control" id="ont" name="ont" readonly value="{{ $details->ont }}">
                    </div>
                    <div class="col-auto">
                        <label for="disabledTextInput" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status" readonly value="{{ $details->status }}">
                    </div>
                    <div class="col-auto">
                        <label for="disabledTextInput" class="form-label">ODP</label>
                        <input type="text" class="form-control" id="odp" name="odp" readonly value="{{ $details->odp }}">
                    </div>
                </div>
            @else
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">SN</label>
                    <input type="text" class="form-control" id="sn" name="sn" readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">AP Name</label>
                    <input type="text" class="form-control" id="ap" name="ap" readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" readonly>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="disabledTextInput" class="form-label">SN ONT</label>
                        <input type="text" class="form-control" id="ont" name="ont" readonly>
                    </div>
                    <div class="col">
                        <label for="disabledTextInput" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status" readonly>
                    </div>
                    <div class="col">
                        <label for="disabledTextInput" class="form-label">ODP</label>
                        <input type="text" class="form-control" id="odp" name="odp" readonly>
                    </div>
                </div>
            @endif
        </div>
    </body>
</div>

@endsection
