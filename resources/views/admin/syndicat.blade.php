@extends('layouts.admin_layout')

@section('title', 'Liste syndicat')

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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($membres as $membre)
                        <tr>
                            <th scope="row">{{ $membre->id }}</th>
                            <td>{{ $membre->nom }}</td>
                            <td>{{ $membre->postnom }}</td>
                            <td>{{ $membre->entreprise }}</td>
                            <td><a href="" class="btn btn-danger">Supprimer</a> | <a href=""
                                    class="btn btn-primary">Modifier</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-1">
            <button id="print_btn" type="button" class="btn btn-danger">Imprimer</button>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var btn = document.querySelector('#print_btn');
        btn.addEventListener('click', (e) => {
            window.print();
        })
    </script>
@endsection
