@extends('layout')
@section('head')
    <style>
      html form{
          margin: 0 auto;
          width: 300px;
          display: flex;
          flex-direction: column;
      }
      html .form-group {
          margin: 5px 0;
      }
      html body input{
          background-color: #27292a;
          height: 46px;
          border-radius: 23px;
          border: none;
          color: #666;
          font-size: 14px;
          padding: 0px 15px 0px 45px;
      }
    </style>
@endsection
@section('content')
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
            <label style="color: white" for="name">Nom du Jeu</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label style="color: white" for="category">Catégorie</label>
            <select class="form-control"  id="category" name="category" required>
                <option value="Aventure">Aventure</option>
                <option value="Plateforme">Plateforme</option>
                <option value="RPG">RPG</option>
                <option value="Shooter">Shooter</option>
                <option value="Sandbox">Sandbox</option>
            </select>
        </div>
        <div class="form-group">
            <label style="color: white" for="team_id">Équipe créatrice</label>
            <select class="form-control" id="team_id" name="team_id">
                <option value="">-- Sélectionnez une équipe --</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">Equipe {{ $team->nbU }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label style="color: white" for="version">Version</label>
            <input type="text" class="form-control" id="version" name="version" required>
        </div>
        <div class="form-group">
            <label style="color: white" for="count">Nombre de telechargements</label>
            <input type="number" class="form-control" id="count" name="count" required>
        </div>
        <div class="form-group">
            <label style="color: white" for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label style="color: white" for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

@endsection
