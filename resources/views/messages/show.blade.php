@extends('layouts.app')

@section('content')
<h2 class="h3">message id: {{$message->id}}</h2>
<img class="img-thumbnail" src="{{$message->image}}"/>
<p class="card-text">{{$message->content}}
<small class="text-muted">{{$message->created_at}}</small>
</p>
@endsection