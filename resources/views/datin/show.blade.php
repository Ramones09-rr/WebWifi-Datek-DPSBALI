@extends('layouts.app')
<title>Web WDAC | Detail Datin</title>
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
                        <a class="nav-link" href="{{ route('datin.index') }}" id='link-active'>Datin</a>
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
        <h1>Detail Datin</h1>
        <hr>

        <dl class="row">
            @foreach ($detail as $detail)
            <dt class="col-sm-3">Tahun</dt>
            <dd class="col-sm-9">: {{ $detail->th}}</dd>

            <dt class="col-sm-3">AM/AMEX</dt>
            <dd class="col-sm-9">: {{ $detail->am }}</dd>

            <dt class="col-sm-3">Segmen</dt>
            <dd class="col-sm-9">: {{ $detail->segmen }}</dd>

            <dt class="col-sm-3">Sub Segmen</dt>
            <dd class="col-sm-9">: {{ $detail->sub }}</dd>

            <dt class="col-sm-3">Customer</dt>
            <dd class="col-sm-9">:  {{ $detail->cust }}</dd>

            <dt class="col-sm-3">Project</dt>
            <dd class="col-sm-9">: {{ $detail->project }}</dd>

            <dt class="col-sm-3">Produk</dt>
            <dd class="col-sm-9">: {{ $detail->produk }}</dd>

            <dt class="col-sm-3">Qty</dt>
            <dd class="col-sm-9">: {{ $detail->qty }}</dd>

            <dt class="col-sm-3">Satuan</dt>
            <dd class="col-sm-9">: {{ $detail->satuan }}</dd>

            <dt class="col-sm-3">OTC</dt>
            <dd class="col-sm-9">: {{ $detail->otc }}</dd>

            <dt class="col-sm-3">Recurring</dt>
            <dd class="col-sm-9">: {{ $detail->rec }}</dd>

            <dt class="col-sm-3">Est Total Kontrak</dt>
            <dd class="col-sm-9">: {{ $detail->tk }}</dd>

            <dt class="col-sm-3">Est Scaling</dt>
            <dd class="col-sm-9">: {{ $detail->sca }}</dd>

            <dt class="col-sm-3">Jumlah Termin</dt>
            <dd class="col-sm-9">: {{ $detail->jml }}</dd>

            <dt class="col-sm-3">Bln Termin</dt>
            <dd class="col-sm-9">: {{ $detail->bln}}</dd>

            <dt class="col-sm-3">Est Bln Billcom</dt>
            <dd class="col-sm-9">: {{ $detail->bill }}</dd>

            <dt class="col-sm-3">Status/Keyakinan</dt>
            <dd class="col-sm-9">: {{ $detail->status }}</dd>

            <dt class="col-sm-3">Level Confidence (%)</dt>
            <dd class="col-sm-9">: {{ $detail->level }}</dd>

            <dt class="col-sm-3">Progress</dt>
            <dd class="col-sm-9">:  {{ $detail->progress }}</dd>

            <dt class="col-sm-3">Klasifikasi Order</dt>
            <dd class="col-sm-9">: {{ $detail->ko }}</dd>

            <dt class="col-sm-3">Nilai Kontrak Sebelumnya</dt>
            <dd class="col-sm-9">: {{ $detail->nks }}</dd>

            <dt class="col-sm-3">Channel</dt>
            <dd class="col-sm-9">: {{ $detail->channel }}</dd>

            <dt class="col-sm-3">Divre</dt>
            <dd class="col-sm-9">: {{ $detail->divre }}</dd>

            <dt class="col-sm-3">Witel</dt>
            <dd class="col-sm-9">: {{ $detail->witel }}</dd>

            <dt class="col-sm-3">Mitra</dt>
            <dd class="col-sm-9">: {{ $detail->mitra }}</dd>

            <dt class="col-sm-3">Masa Kontrak (Bulan)</dt>
            <dd class="col-sm-9">: {{ $detail->masa }}</dd>

            <dt class="col-sm-3">Keterangan</dt>
            <dd class="col-sm-9">: {{ $detail->ket }}</dd>
             @endforeach
        </dl>

        <div class="mt-2">
            <a href="{{ route('datin.index') }}" class="btn btn-secondary mb-3">Back</a>
        </div>
    </div>
</div>

@endsection
