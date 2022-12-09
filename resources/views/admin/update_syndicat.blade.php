@extends('layouts.admin_layout')

@section('title', 'Update Adhesion')

@section('content')
    <div class="row" style="margin-top: 20px;">
        @isset($notify)
            <h1>Updated</h1>
        @endisset
        <div class="col-md-12">
            <form method="POST" action="{{ route('agents.syndicat.update', $agentToUpdate->id) }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom"
                            value="{{ $agentToUpdate->nom }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Post Nom</label>
                        <input value="{{ $agentToUpdate->postnom }}" type="text" class="form-control" name="postnom"
                            placeholder="Post Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input value="{{ $agentToUpdate->email }}" type="email" name="email" class="form-control"
                        id="inputAddress" placeholder="nom@address.com">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Date de naissance</label>
                        <input name="date" type="date" class="form-control" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Sexe</label>
                        <select name="sexe" class="form-control">
                            <option value="m">M</option>
                            <option value="f">F</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Matricule</label>
                        <input value="{{ $agentToUpdate->matricule }}" type="text" name="matricule" class="form-control"
                            id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Entreprise</label>
                        <input value="{{ $agentToUpdate->entreprise }}" type="text" name="entreprise"
                            class="form-control" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Fonction</label>
                        <select name="fonction" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="pds">Président de la base syndicale</option>
                            <option value="pdf">Président de la féderation</option>
                            <option value="drh">Directeur de ressource humaine</option>
                            <option value="adherant">adherant</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Localité</label>
                        <input value="{{ $agentToUpdate->localite }}" name="localite" type="text" class="form-control"
                            placeholder="Localité">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Federation</label>
                        <input value="{{ $agentToUpdate->federation }}" name="federation" type="text"
                            class="form-control" placeholder="Federation">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Par le présent formualaire, je déclare mon affiliation à L'UNTC et autorise mon employeur à
                            retenir mensuellement sur ma rémuneration, la cotisation syndicale et à la verser à L'UNTC.
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn">Je modifie</button>
            </form>
        </div>
    </div>
@endsection
