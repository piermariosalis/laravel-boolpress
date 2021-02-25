@extends('layouts.app')

@section('main')
<h1>MyAdmin</h1>
<div class="container-fluid">
<a href="{{route('articles.create')}}" class="btn bg-dark text-white">Create a new Article</a>
</div>

<h2>Posts Database</h2> <span><i class="fas fa-table fa-lg fa-fw   "></i></span> 
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>body</th>
            <th>create at</th>
            <th>updated at</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td> {{$article->title}}</td>
            <td>{{$article->body}}</td>
            <td>{{$article->created_at}}</td>
            <td>{{$article->updated_at}}</td>

            <td>
                <a href="{{route('articles.show', ['article'=> $article->id] )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i> View
                </a>
                <a href="{{route('articles.edit', ['article'=> $article->id])}}" class="btn btn-warning">
                    <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                </a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-small " data-toggle="modal" data-target="#destroy-{{$article->id}}">
                    <i class="fas fa-trash fa-lg fa-fw"></i>Drop
                </button>

                <!-- Modal -->
                <div class="modal fade" id="destroy-{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="article-destroy-{{$article->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="article-destroy-{{$article->id}}">Delete Post {{$article->title}} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{route('articles.destroy', ['article' => $article->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">

                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </td>


        </tr>
        @endforeach

    </tbody>
</table>
@endsection