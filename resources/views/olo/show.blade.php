@extends('layouts.app')
<title>Web WDAC | Detail OLO</title>
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
                        <a class="nav-link" href="{{ route('olo.index') }}" id='link-active'>OLO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('node.index') }}">Node B</a>
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
        <h1>Detail OLO</h1>
        <hr>

        <dl class="row">
            @foreach ($detail as $detail)
            <dt class="col-sm-3">No Ticaters</dt>
            <dd class="col-sm-9">: {{ $detail->notic}}</dd>

            <dt class="col-sm-3">Tanggal Start</dt>
            <dd class="col-sm-9">: {{ $detail->ts }}</dd>

            <dt class="col-sm-3">Tanggal Close</dt>
            <dd class="col-sm-9">: {{ $detail->tc }}</dd>

            <dt class="col-sm-3">Customer</dt>
            <dd class="col-sm-9">: {{ $detail->cust }}</dd>

            <dt class="col-sm-3">Network ID</dt>
            <dd class="col-sm-9">:  {{ $detail->nid }}</dd>

            <dt class="col-sm-3">Service ID</dt>
            <dd class="col-sm-9">: {{ $detail->sid }}</dd>

            <dt class="col-sm-3">External ID</dt>
            <dd class="col-sm-9">: {{ $detail->xid }}</dd>

            <dt class="col-sm-3">Jenis Instalasi</dt>
            <dd class="col-sm-9">: {{ $detail->jin }}</dd>

            <dt class="col-sm-3">BW (Mbps)</dt>
            <dd class="col-sm-9">: {{ $detail->bw }}</dd>

            <dt class="col-sm-3">Alamat Node</dt>
            <dd class="col-sm-9">: {{ $detail->alamat }}</dd>

            <dt class="col-sm-3">Longitude</dt>
            <dd class="col-sm-9">: {{ $detail->long }}</dd>

            <dt class="col-sm-3">Latitude</dt>
            <dd class="col-sm-9">: {{ $detail->lat }}</dd>

            <dt class="col-sm-3">NTE Type</dt>
            <dd class="col-sm-9">: {{ $detail->nte }}</dd>

            <dt class="col-sm-3">Type & Konfigurasi Network</dt>
            <dd class="col-sm-9">: {{ $detail->type }}</dd>

            <dt class="col-sm-3">Product</dt>
            <dd class="col-sm-9">: {{ $detail->product}}</dd>

            <dt class="col-sm-3">Jenis Layanan</dt>
            <dd class="col-sm-9">: {{ $detail->jla }}</dd>

            <dt class="col-sm-3">STO</dt>
            <dd class="col-sm-9">: {{ $detail->sto }}</dd>

            <dt class="col-sm-3">Metro</dt>
            <dd class="col-sm-9">: {{ $detail->metro }}</dd>

            <dt class="col-sm-3">Port Metro</dt>
            <dd class="col-sm-9">:  {{ $detail->portm }}</dd>

            <dt class="col-sm-3">OLT</dt>
            <dd class="col-sm-9">: {{ $detail->olt }}</dd>

            <dt class="col-sm-3">Port OLT</dt>
            <dd class="col-sm-9">: {{ $detail->portl }}</dd>

            <dt class="col-sm-3">ODP</dt>
            <dd class="col-sm-9">: {{ $detail->odp }}</dd>

            <dt class="col-sm-3">ONT Model</dt>
            <dd class="col-sm-9">: {{ $detail->ont }}</dd>

            <dt class="col-sm-3">Port ONT</dt>
            <dd class="col-sm-9">: {{ $detail->portn }}</dd>

            <dt class="col-sm-3">SN ONT</dt>
            <dd class="col-sm-9">: {{ $detail->sn }}</dd>

            <dt class="col-sm-3">VLAN</dt>
            <dd class="col-sm-9">: {{ $detail->vlan }}</dd>

            <dt class="col-sm-3">OA | Dismantle</dt>
            <dd class="col-sm-9">: {{ $detail->oa }}</dd>

            <dt class="col-sm-3">Keterangan</dt>
            <dd class="col-sm-9">: {{ $detail->ket }}</dd>
             @endforeach
        </dl>

        <div class="mt-2">
            <a href="{{ route('olo.index') }}" class="btn btn-secondary mb-3">Back</a>
        </div>
    </div>
</div>

@endsection
