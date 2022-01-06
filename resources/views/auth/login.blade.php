@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Web WDAC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                @guest
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> --}}
                    {{-- @if (Route::has('register')) --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    {{-- @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Halo, {{ Auth::user()->name }}
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
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="auth-container">
    <div class="card">
        <div class="text-center">
            <img class="mb-4" src="images/logo2.png" alt="" width="120" height="68">
        </div>
        <h1 class="headline">Please Login</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <div class="input-group">
                        <i class="bi bi-envelope-fill auth-icon"></i>
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group">
                        <i class="bi bi-lock-fill auth-icon"></i>
                        <input id="password" type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group">
                            <button type="submit" class="btn btn-auth">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            {{-- <small class="d-block text-center mt-3 auth-hint">Don't have an account? <a href="{{ route('register') }}">Register</a></small> --}}
        </div>
    </div>
</div>

@endsection
