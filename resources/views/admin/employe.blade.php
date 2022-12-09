@extends('layouts.admin_layout')

@section('title', 'Liste Employé')

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Post nom</th>
                        <th scope="col">Entreprise</th>
                        <th scope="col">Federation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($membres as $membre)
                        <tr>
                            <th scope="row">{{ $membre->id }}</th>
                            <td>{{ $membre->nom }}</td>
                            <td>{{ $membre->postnom }}</td>
                            <td>{{ $membre->entreprise }}</td>
                            <td>{{ $membre->federation }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger">Imprimer</button>
        </div>
    </div>
@endsection
