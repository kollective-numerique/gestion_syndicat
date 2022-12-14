@extends('layouts.admin_layout')

@section('title', 'Changer mot de passe')

@section('content')
    @if (isset($notify))
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="alert alert-success" role="alert">
                    {{ $notify }}
                </div>
            </div>
        </div>
    @endif
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-6 offset-3">
            <form class="jumbotron" method="POST" action="{{ route('agents.password.post') }}">
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
                <div class="form-group">
                    <label for="exampleInputPassword1">Nouveau Mot de passe</label>
                    <input name="passwd2" type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
