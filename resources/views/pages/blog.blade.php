@extends('layouts.app')

@section('title','Blog')

@section('content')

<h2>Blog</h2>

<ul class="list-group">

@foreach($articles as $article)

<li class="list-group-item">
    {{ $article }}
</li>

@endforeach

</ul>

@endsection