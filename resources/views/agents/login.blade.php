@extends('layouts.app')
 
@section('title', 'Reglement')

@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="col-md-6 offset-3">
        <form class="jumbotron">
            <div class="form-group">
              <label for="exampleInputEmail1">Addresse Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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