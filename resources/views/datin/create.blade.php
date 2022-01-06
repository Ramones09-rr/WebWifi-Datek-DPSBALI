@extends('layouts.app')
<title>Web WDAC | Input Datin</title>
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
        <h1>Input Datin</h1>
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

                <form class="row g-3" method="POST" action="{{ route('datin.store') }}">
                @csrf

                <div class="col-md-5">
                    <label for="" class="font-weight-bold">AM/AMEX</label>
                    <input list="amOptions" value="{{ Request::old('am') }}" class="form-control" name="am" id="am" placeholder="Pilih AM/AMEX">
                    <datalist id="amOptions">
                        <option value="I GEDE RYAN TRISNA WIRAWAN">
                        <option value="ICHA NOVANIA">
                        <option value="NI MADE NOVI WIRANA">
                        <option value="OKTAVINDA NUGROHO">
                    </datalist>
                </div>

                <div class="col-md-4">
                    <label for="" class="font-weight-bold">Segmen</label>
                    <input list="sgOptions" value="{{ Request::old('segmen') }}" class="form-control" name="segmen" id="segmen" placeholder="Pilih Segmen">
                    <datalist id="sgOptions">
                        <option value="DES">
                        <option value="DGS">
                    </datalist>
                </div>

                <div class="col-md-3">
                    <label for="" class="font-weight-bold">Sub Segmen</label>
                    <input list="ssOptions" value="{{ Request::old('sub') }}" class="form-control" name="sub" id="sub" placeholder="Pilih Sub Segmen">
                    <datalist id="ssOptions">
                        <option value="BMS">
                        <option value="ERS">
                        <option value="FMS">
                        <option value="HWS">
                        <option value="LGS">
                        <option value="MLS">
                        <option value="TDS">
                        <option value="THS">
                        <option value="TMS">
                    </datalist>
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Customer</label>
                    <input type="text" value="{{ Request::old('cust') }}" class="form-control" name="cust" id="cust">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Project</label>
                    <input type="text" value="{{ Request::old('project') }}" class="form-control" name="project" id="project">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Produk</label>
                    <input list="prodOptions" value="{{ Request::old('produk') }}" class="form-control" name="produk" id="produk" placeholder="Pilih Produk">
                    <datalist id="prodOptions">
                        <option value="ASTINET">
                        <option value="INDIHOME">
                        <option value="WIFI ID">
                    </datalist>
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">QTY</label>
                    <input type="text" value="{{ Request::old('qty') }}" class="form-control" name="qty" id="qty">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Satuan</label>
                    <input list="satOptions" value="{{ Request::old('satuan') }}" class="form-control" name="satuan" id="satuan" placeholder="Pilih Satuan">
                    <datalist id="satOptions">
                        <option value="AP">
                        <option value="KBPS">
                        <option value="LINE">
                        <option value="MBPS">
                        <option value="PAKET">
                        <option value="SSL">
                        <option value="STB">
                        <option value="LAINNYA">
                    </datalist>
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">OTC</label>
                    <input type="text" value="{{ Request::old('otc') }}" class="form-control" name="otc" id="otc">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Recurring</label>
                    <input type="text" value="{{ Request::old('rec') }}" class="form-control" name="rec" id="rec">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Est Total Kontrak</label>
                    <input type="text" value="{{ Request::old('tk') }}" class="form-control" name="tk" id="tk">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Est Scaling</label>
                    <input type="text" value="{{ Request::old('sca') }}" class="form-control" name="sca" id="sca">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Jumlah Termin</label>
                    <input type="text" value="{{ Request::old('jml') }}" class="form-control" name="jml" id="jml">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Bln Termin</label>
                    <input type="text" value="{{ Request::old('bln') }}" class="form-control" name="bln" id="bln">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Est Bln Billcom</label>
                    <input type="text" value="{{ Request::old('bill') }}" class="form-control" name="bill" id="bill">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Status/Keyakinan</label>
                    <input list="skOptions" value="{{ Request::old('status') }}" class="form-control" name="status" id="status" placeholder="Pilih Status/Keyakinan">
                    <datalist id="skOptions">
                        <option value="ON HAND">
                        <option value="POTENSI">
                        <option value="PROSPEK">
                    </datalist>
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Level Confidence (%)</label>
                    <input type="text" value="{{ Request::old('level') }}" class="form-control" name="level" id="level">
                </div>

                <div class="col-12 mt-3">
                    <label for="" class="font-weight-bold">Progress</label>
                    <input type="text" value="{{ Request::old('progress') }}" class="form-control" name="progress" id="progress">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Klasifikasi Order</label>
                    <input type="text" value="{{ Request::old('ko') }}" class="form-control" name="ko" id="ko">
                </div>

                <div class="col-sm-6 mt-3">
                    <label for="" class="font-weight-bold">Nilai Kontrak Sebelumnya</label>
                    <input type="text" value="{{ Request::old('nks') }}" class="form-control" name="nks" id="nks">
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Channel</label>
                    <input type="text" value="{{ Request::old('channel') }}" class="form-control" name="channel" id="channel">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Divre</label>
                    <input list="dvOptions" value="{{ Request::old('divre') }}" class="form-control" name="divre" id="divre" placeholder="Pilih Divre">
                    <datalist id="dvOptions">
                        <option value="5">
                    </datalist>
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Witel</label>
                    <input list="wtOptions" value="{{ Request::old('witel') }}" class="form-control" name="witel" id="witel" placeholder="Pilih Witel">
                    <datalist id="wtOptions">
                        <option value="DENPASAR">
                    </datalist>
                </div>

                <div class="col-md-5 mt-3">
                    <label for="" class="font-weight-bold">Mitra</label>
                    <input type="text" value="{{ Request::old('mitra') }}" class="form-control" name="mitra" id="mitra">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="" class="font-weight-bold">Masa Kontrak (Bulan)</label>
                    <input type="text" value="{{ Request::old('masa') }}" class="form-control" name="masa" id="masa">
                </div>

                <div class="col-md-3 mt-3">
                    <label for="" class="font-weight-bold">Tahun</label>
                    <input type="text" value="{{ Request::old('th') }}" class="form-control" name="th" id="th">
                </div>

                <div class="col-12 mt-3 mb-2">
                    <label for="" class="font-weight-bold">Keterangan</label>
                    <input type="text" value="{{ Request::old('ket') }}" class="form-control" name="ket" id="ket">
                </div>

                <div class="col-sm-12 mt-4">
                    <a href="{{ route('datin.index') }}" class="btn btn-secondary">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
