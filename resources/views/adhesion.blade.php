@extends('layouts.app')
 
@section('title', 'Adhesion')

@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="col-md-12">
        <form>
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Post Nom</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Post Nom">
              </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="email" class="form-control" id="inputAddress" placeholder="nom@address.com">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Date de naissance</label>
                    <input type="date" class="form-control" placeholder="Nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Sexe</label>
                    <select class="form-control">
                        <option>M</option>
                        <option>F</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCity">Matricule</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Entreprise</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Fonction</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Localité</label>
                  <input type="text" class="form-control" placeholder="Localité">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Federation</label>
                  <input type="text" class="form-control" placeholder="Federation">
                </div>
              </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Par le présent formualaire, je déclare mon affiliation à L'UNTC et autorise mon employeur à retenir mensuellement sur ma rémuneration, la cotisation syndicale et à la verser à L'UNTC. 
                </label>
              </div>
            </div>
            <button type="submit" class="btn">Je m'inscris</button>
        </form>
    </div>
</div>
@endsection