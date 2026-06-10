@extends('layouts.app')

@section('title','Beranda')

@section('content')

<div class="p-5 bg-light rounded">

    <h1>Selamat Datang</h1>

    <p>Website Challenge Laravel Bab 2</p>

</div>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Fitur 1
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Fitur 2
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Fitur 3
            </div>
        </div>
    </div>

</div>

@endsection