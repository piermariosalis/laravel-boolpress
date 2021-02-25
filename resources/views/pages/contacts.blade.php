@extends('layouts.app')


@section('jumbotron')
    <div class="jumbotron bg-dark-gray text-black">
        <h1 class="display-3">Contattaci per assistenza o richieste commerciali</h1>
        <p class="lead">Compila il form</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('home')}}" role="button">Torna alla Home</a>
        </p>

        <div class="form-group">
          <label for="">Contattaci</label>
          <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Inserisci la tua email">
          <label for="">Messaggio</label>
            <textarea name="" id="" class="w-100" rows="10"> Testo di esempio</textarea>
          <small id="emailHelpId" class="form-text text-muted">Help text</small>
        </div>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Invia richiesta</a>
        </p>
    </div>
@endsection
