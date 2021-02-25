@extends('layouts.app')

@section('title')
    About page
@endsection


@section('jumbotron')
    <div class="jumbotron text-dark">
        <h1 class="display-3">Chi siamo</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae sit hic illo quo, sed debitis fugiat delectus molestiae commodi! Repudiandae vitae rerum voluptatem dicta sed consequuntur cupiditate quod eaque porro cum odio sequi eligendi, non maxime ut voluptatibus inventore.</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('contacts')}}" role="button">Contattaci</a>
        </p>
    </div>
@endsection

@section('main')
    <h1>About {{ $name }}</h1>
@endsection