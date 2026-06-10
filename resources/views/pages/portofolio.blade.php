@extends('layouts.app')

@section('title','Portofolio')

@section('content')

<h2>Portofolio</h2>

<div class="row">

@foreach($projects as $project)

<div class="col-md-4 mb-3">

<div class="card">

<div class="card-body">

{{ $project['title'] }}

</div>

</div>

</div>

@endforeach

</div>

@endsection