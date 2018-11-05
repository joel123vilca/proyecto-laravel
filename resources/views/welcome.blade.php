@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
<h1>Larater</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="nav nav-pills">
        <li class="nav-item">
        <a class="nav-link" href="/">home</a>
        </li>
    </ul>
</nav>
<div class="row">
    @foreach($messages as $message)
    <div class="col-6">
        <img class="img-thumbnail" src="{{$message->image}}">
    </div>
    <p class="card-text">
    {{$message->content }}
    <a href="/messages/{{ $message->id }}">leer mas</a>
    </p>
    @endforeach
</div>
@endsection