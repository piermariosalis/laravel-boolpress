@extends('layouts.app')

@section('main')




<div class="container">
    <h1>{{$article->title}}</h1>
    <p>{{$article->body}}</p>
</div>
@endsection