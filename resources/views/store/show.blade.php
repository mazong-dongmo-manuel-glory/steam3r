@extends('layout')

@section('content')

        <div class="container my-5">
            <h1 class="mb-4">{{ $game->name }}</h1>

            <!-- Section Détails du jeu -->
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/images/' . $game->link) }}" alt="{{ $game->name }}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h4>Catégorie : {{ $game->category }}</h4>
                    <h4>Version : {{ $game->version }}</h4>
                    <h4>Note : {{ $game->count }}</h4>
                    <p>{{ $game->description }}</p>
                </div>
            </div>

            <!-- Section Médias -->
            <div class="mt-5">
                <h2>Médias associés</h2>
                <div class="row">
                    @foreach ($game->medias as $media)
                        <div class="col-md-4">
                            @if ($media->type === 'image')
                                <img src="{{ asset('storage/images/' . $media->link) }}" alt="{{ $media->name }}" class="img-fluid">
                            @elseif ($media->type === 'video')
                                <video controls width="100%">
                                    <source src="{{ asset('storage/videos/' . $media->link) }}" type="video/mp4">
                                </video>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Section Équipes -->
            <div class="mt-5">
                <h2>Équipes jouant à ce jeu</h2>
                <div class="row">
                    @foreach ($game->teams as $team)
                        <div class="col-md-4">
                            <h4>Équipe ID : {{ $team->id }}</h4>
                            <p>Nombre d'Utilisateurs : {{ $team->nbU }}</p>
                            <h5>Membres :</h5>
                            <ul>
                                @foreach ($team->usagers as $usager)
                                    <li>{{ $usager->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Retour</a>
            </div>
        </div>

@endsection
