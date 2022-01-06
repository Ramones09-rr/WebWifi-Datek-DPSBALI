@extends('layouts.app')
<title>Web WDAC | Detail Node B</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('olo.index') }}">OLO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('node.index') }}" id='link-active'>Node B</a>
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
        <h1>Detail Node B</h1>
        <hr>

        <dl class="row">
            @foreach ($detail as $detail)
            <dt class="col-sm-3">Site Name</dt>
            <dd class="col-sm-9">: {{ $detail->sname}}</dd>

            <dt class="col-sm-3">Site Address</dt>
            <dd class="col-sm-9">: {{ $detail->sadd }}</dd>

            <dt class="col-sm-3">Site ID</dt>
            <dd class="col-sm-9">: {{ $detail->sid }}</dd>

            <dt class="col-sm-3">Hub Site Name</dt>
            <dd class="col-sm-9">: {{ $detail->hsn }}</dd>

            <dt class="col-sm-3">Latitude</dt>
            <dd class="col-sm-9">:  {{ $detail->lat }}</dd>

            <dt class="col-sm-3">Longitude</dt>
            <dd class="col-sm-9">: {{ $detail->long }}</dd>

            <dt class="col-sm-3">Akses</dt>
            <dd class="col-sm-9">: {{ $detail->akses }}</dd>

            <dt class="col-sm-3">System</dt>
            <dd class="col-sm-9">: {{ $detail->system }}</dd>

            <dt class="col-sm-3">Hub Site ID</dt>
            <dd class="col-sm-9">: {{ $detail->hsi }}</dd>

            <dt class="col-sm-3">Datek Metro E</dt>
            <dd class="col-sm-9">: {{ $detail->dme }}</dd>

            <dt class="col-sm-3">OLT Name</dt>
            <dd class="col-sm-9">: {{ $detail->oname }}</dd>

            <dt class="col-sm-3">OLT Port</dt>
            <dd class="col-sm-9">: {{ $detail->oport }}</dd>

            <dt class="col-sm-3">Plan Transport Co Trans</dt>
            <dd class="col-sm-9">: {{ $detail->ptct }}</dd>

            <dt class="col-sm-3">SN ONT</dt>
            <dd class="col-sm-9">: {{ $detail->sn }}</dd>

            <dt class="col-sm-3">ONT Version</dt>
            <dd class="col-sm-9">: {{ $detail->ont}}</dd>

            <dt class="col-sm-3">VLAN Cluster 2G</dt>
            <dd class="col-sm-9">: {{ $detail->v2g }}</dd>

            <dt class="col-sm-3">VLAN Cluster 3G</dt>
            <dd class="col-sm-9">: {{ $detail->v3g }}</dd>

            <dt class="col-sm-3">VLAN Cluster 4G</dt>
            <dd class="col-sm-9">: {{ $detail->v4g }}</dd>

            <dt class="col-sm-3">Port ONT</dt>
            <dd class="col-sm-9">:  {{ $detail->portn }}</dd>

            <dt class="col-sm-3">IP ONT</dt>
            <dd class="col-sm-9">: {{ $detail->ipo }}</dd>

            <dt class="col-sm-3">BW TOT</dt>
            <dd class="col-sm-9">: {{ $detail->bwt }}</dd>

            <dt class="col-sm-3">VLAN OAM</dt>
            <dd class="col-sm-9">: {{ $detail->oam }}</dd>

            <dt class="col-sm-3">ODP Name</dt>
            <dd class="col-sm-9">: {{ $detail->odp }}</dd>

            <dt class="col-sm-3">Remark</dt>
            <dd class="col-sm-9">: {{ $detail->remark }}</dd>

            <dt class="col-sm-3">Tagihan Des</dt>
            <dd class="col-sm-9">: {{ $detail->tdes }}</dd>

            <dt class="col-sm-3">Keterangan</dt>
            <dd class="col-sm-9">: {{ $detail->ket }}</dd>
             @endforeach
        </dl>

        <div class="mt-2">
            <a href="{{ route('node.index') }}" class="btn btn-secondary mb-3">Back</a>
        </div>
    </div>
</div>

@endsection
