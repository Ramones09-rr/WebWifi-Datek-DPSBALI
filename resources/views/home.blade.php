@extends('layouts.app')
<title>Web WDAC | Home</title>
@section('content')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Web WDAC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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


<div class="container">
    <div class="row">

        <div class="col">
            <div class="card">
                <h1 class="card-title">
                    DATEK
                </h1>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                <a class="btn btn-menu" href="{{ route('datek.index') }}">BUKA</a>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h1 class="card-title">
                    DATIN
                </h1>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                <a class="btn btn-menu" href="{{ route('datin.index') }}">BUKA</a>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h1 class="card-title">
                    BTS
                </h1>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                <a class="btn btn-menu" href="{{ route('olo.index') }}">BUKA</a>
            </div>
        </div>

    </div>
</div>

@endsection
