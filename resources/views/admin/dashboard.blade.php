@extends('layouts.admin_layout')

@section('title', 'Administration')

@section('content')
    <div class="row" style="margin-left: 20px;">
        <h1>Administration</h1>
    </div>
    @if ($agent->fonction == 'pds')
        <div class="row">
            <div class="jumbotron">
                <h2>Nombre d'adhérant actuel : {{ $nbrAgent }}</h2>
            </div>
        </div>
    @endif
@endsection
