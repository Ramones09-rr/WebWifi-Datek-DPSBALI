@extends('layouts.app')
<title>Web WDAC | Input Laporan</title>
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
        <h1>Input Laporan</h1>
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
                @livewire("laporan")
            </div>
        </div>
    </div>

@endsection
