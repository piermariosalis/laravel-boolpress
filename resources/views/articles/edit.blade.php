@extends('layouts.app')



@section('main')
<h1>Edit {{$article->title}} </h1>
@include('partials.errors')
<form action="{{ route('articles.update', ['article'=> $article->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}">
    </div>
    @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
    </div>
     @error('body')
         <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection