<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Welcome to my {{ $title }}</h1>
        <p class="lead">Inizia subito a interagire con altri utenti creando un nuovo articolo!</p>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('articles.create')}}" role="button">Create an Article</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary b4-btn-dark " href="{{route('articles.index')}}" role="button">Admin Blog</a>
        </p>
    </div>
</div>