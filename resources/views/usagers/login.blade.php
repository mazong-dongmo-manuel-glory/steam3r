@extends('layout')
@section("head")
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('content')
 <div class="container">
    <h2>Connexion</h2>
    <form method="POST" action="{{route('usagers.dologin')}}">
        @csrf
        <div class="form-group">
            <label for="matricule">SE CONNECTER AVEC UN MATRICULE DE COMPTE</label>
            <input type="text" id="matricule" name="matricule">
        </div>
        <div class="form-group">
            <label for="password">MOT DE PASSE</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="form-group remember">
            <input type="checkbox">
            <label>Se souvenir de moi</label>
        </div>
        <button type="submit">Se connecter</button>
        <a href="">Première fois sur Steam ? creer un compte</a>
    </form>
 </div>
@endsection
