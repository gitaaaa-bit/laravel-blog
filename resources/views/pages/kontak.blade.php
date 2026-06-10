@extends('layouts.app')

@section('title','Kontak')

@section('content')

<h2>Kontak</h2>

<form>

<input type="text"
class="form-control mb-3"
placeholder="Nama">

<input type="email"
class="form-control mb-3"
placeholder="Email">

<textarea
class="form-control mb-3"
rows="4"
placeholder="Pesan"></textarea>

<button class="btn btn-primary">
Kirim
</button>

</form>

@endsection