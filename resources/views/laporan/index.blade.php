@extends('layouts.app')
<title>Web WDAC | Laporan</title>
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
    <h1>{{ $pageTitle }}</h1>
    <hr>
    @can('admin')
        <a href="{{ route('laporan.create') }}" class="btn btn-primary mb-3">Input</a>
        <a href="{{ route('exportlaporan') }}" class="btn btn-success mb-3">Print</a>

        {{-- <form action="{{ route('importlaporan') }}" method="post" enctype="multipart/form-data">
            <h4 class='import-head'>Import File</h4>
            <div class="import-section">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="file" name="file" required="required">
                </div>
                <button type="submit" class="btn btn-danger btn-import mb-3">Import</button>
            </div>
        </form> --}}
    @endcan

    <div class="col-md-4 mb-3">
        <label>Tanggal</label>
        <select id="filter-tanggal" class="form-control">
            <option value="">Pilih Tanggal</option>
                @foreach ($laporan->collection_created_date as $key=>$tgl)
                <option value="{{ $tgl }}">{{ $tgl }}</option>
                @endforeach
        </select>
    </div>

    <table class="table table-bordered" id="laporanTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Notik</th>
                <th scope="col">Nama</th>
                <th scope="col">SN AP</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    </table>
</div>

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('importlaporan') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="file" name="file" required="required">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    </div>
</div> --}}

@endsection

@section('custom_script')
    <script>
        $(document).ready(function() {
            $('#laporanTable').DataTable({
                "order": [[ 0, "desc" ]],
                processing: true,
                serverSide: true,
                ajax: "{{ route('laporan.getData') }}",
                columns: [
                    {data: 'created', name: 'created'},
                    {data: 'notik', name: 'notik'},
                    {data: 'nama', name: 'nama'},
                    {data: 'snap', name: 'snap'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
    </script>
@endsection
