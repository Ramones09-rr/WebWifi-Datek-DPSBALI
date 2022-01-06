@extends('layouts.app')
<title>Web WDAC | Rehab</title>
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
    <h1>{{ $pageTitle }}</h1>
    <hr>
    @can('admin')
        <a href="{{ route('rehab.create') }}" class="btn btn-primary mb-3">Input</a>
    @endcan

    <table class="table table-bordered" id="rehabTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Periode</th>
                <th scope="col">Total AP</th>
                <th scope="col">File</th>
            </tr>
        </thead>
    </table>
</div>

@endsection

@section('custom_script')
    <script>
        $(document).ready(function() {
            $('#rehabTable').DataTable({
                "order": [[ 0, "desc" ]],
                processing: true,
                serverSide: true,
                ajax: "{{ route('rehab.getData') }}",
                columns: [
                    {data: 'created', name: 'created'},
                    {data: 'periode', name: 'periode'},
                    {data: 'tap', name: 'tap'},
                    {data: 'fileevi_unique', name: 'fileevi_unique'},
                ]
            });
        });
    </script>
@endsection
