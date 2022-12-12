@extends('layouts.admin_layout')

@section('title', 'Liste Admin')

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Post nom</th>
                        <th scope="col">Fonction</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($membres as $membre)
                        <tr>
                            <th scope="row">{{ $membre->id }}</th>
                            <td>{{ $membre->nom }}</td>
                            <td>{{ $membre->postnom }}</td>
                            <td>{{ $membre->fonction }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
