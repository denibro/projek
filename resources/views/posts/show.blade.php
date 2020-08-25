@extends('adminlte.master')

@section('content')
  <div class="ml-3 mt-3">
    <h1>Title : {{$post->title}}</h1>
    <br>
    <h3>Body : {{$post->body}}</h3>
  </div>
@endsection