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
</div>
<div class="row">
    <form action="/messages/create" method="post">
        <div class="form-group">
            {{csrf_field()}}
        <input type="text" name="message" class="form-control" placeholder="que estas pensando?"/>
        </div>
    </form>
</div>

<div class="row">
    @foreach($messages as $message)
    <div class="col-6">
        <img class="img-thumbnail" src="{{$message->image}}">
    
    <p class="card-text">
    {{$message->content }}
    <a href="/messages/{{ $message->id }}">leer mas</a>
    </p>
    </div>
    @endforeach
</div>
@endsection