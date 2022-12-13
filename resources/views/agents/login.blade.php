@extends('layouts.app')

@section('title', 'Reglement')

@section('content')
    @if (isset($error_login))
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="alert alert-danger" role="alert">
                    Mot de passe incorrect
                </div>
            </div>
        </div>
    @endif
    <div class="row" style="margin-top: 20px;">

        <div class="col-md-6 offset-3">
            <form class="jumbotron" method="POST" action="{{ route('agents.login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Addresse Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input name="passwd" type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
