@extends('layouts.app')

@section('title', 'Demo Components')

@section('content')

<div class="container">

    <h1 class="mb-4">Demo Blade Components</h1>

    {{-- Breadcrumb --}}
    <h3>0. Breadcrumb</h3>

    <x-breadcrumb current="Components" />

    <hr>

    {{-- Alert --}}
    <h3>1. Alert</h3>

    <div class="alert alert-success">
        Data berhasil disimpan
    </div>

    <div class="alert alert-danger">
        Terjadi kesalahan
    </div>

    <div class="alert alert-warning">
        Periksa kembali data Anda
    </div>

    <div class="alert alert-info">
        Informasi terbaru tersedia
    </div>

    <hr>

    {{-- Badge --}}
    <h3>2. Badge</h3>

    <span class="badge bg-primary">Laravel</span>
    <span class="badge bg-success">PHP</span>
    <span class="badge bg-danger">MySQL</span>

    <hr>

    {{-- Button --}}
    <h3>3. Button</h3>

    <button class="btn btn-primary">Simpan</button>
    <button class="btn btn-secondary">Batal</button>
    <button class="btn btn-outline-primary">Detail</button>

    <hr>

    {{-- Card --}}
    <h3>4. Card</h3>

    <div class="card">
        <div class="card-header">
            Laravel 13
        </div>

        <div class="card-body">
            Framework PHP Modern untuk Web Development
        </div>

        <div class="card-footer">
            Update 2026
        </div>
    </div>

</div>

@endsection