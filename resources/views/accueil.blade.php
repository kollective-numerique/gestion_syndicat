@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="row">
        <div class="jumbotron" style="margin-top: 20px;">
            <h1 class="display-4">Union National des travailleurs du Congo - UNTC</h1>
            <p class="lead">République Démocratique du Congo.</p>
            <hr class="my-4">
            <p>
                L'union nationale des travailleurs du Congo (UNTC) a été formée en 1967, suite à la fusion de l'ensemble des
                syndicats présents à l'époque sur le territoire du zaïre, connu aujourd'hui sous le nom de République
                Démocratique du Congo
            </p>
            <a class="btn btn-primary btn-lg" href="{{ route('reglement') }}" role="button">Lire la charte</a>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="jumbotron">
            <h2>Nombre d'adhérant actuel : {{ $adhesion }}</h2>
        </div>
    </div>
@endsection
