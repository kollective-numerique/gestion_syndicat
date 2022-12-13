@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    {{--  <div style="margin-top: 20px;" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/banner.png" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}

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
@endsection
