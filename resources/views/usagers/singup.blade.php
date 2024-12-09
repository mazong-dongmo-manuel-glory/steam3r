@extends('layout')
@section("head")
<link rel="stylesheet" href="{{asset('css/singup.css')}}">
@endsection
@section('content')
 <div class="container">
    <h2>Inscription</h2>
    <form method="POST" action="{{route('usagers.doSingUp')}}">
        @csrf
        <div class="form-group">

        </div>
        <div class="form-group">
            <label for="username">Nom</label>
            <input type="text" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="matricule">Matricule</label>
            <input type="text" id="matricule" name="matricule">
        </div>

        <div class="form-group">
            <label>Categorie</label>
            <select name="categorie">
                <option>PROFESSEUR DEP.INFORMATIQUE</option>
                <option>ETUDIANT INFORMATIQUE</option>
                <option>AUTRE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">MOT DE PASSE</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="confirm_password">CONFIRMATION MOT DE PASSE</label>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <div class="form-group remember">
            <input type="checkbox">
            <label>Se souvenir de moi</label>
        </div>

        <button type="submit">S'inscrire</button>
        <a href="">Vous avez deja un compte? creer un compte</a>
    </form>
 </div>
@endsection
