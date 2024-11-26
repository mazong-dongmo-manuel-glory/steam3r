@extends('layout')

@section('content')
    <!-- ***** Most Popular Start ***** -->
    <div class="most-popular">
        <div class="row">

            <div class="col-lg-12">
                @foreach ($gamesByCategory as $category => $games)
                    <!-- Section pour chaque catégorie -->
                    <div class="heading-section">
                        <h4><em>{{ $category }}</em> </h4>
                    </div>
                    <div class="row">
                        @foreach ($games as $game)
                            <div class="col-lg-4 col-sm-6" >
                                <a href="{{ route('games.show', $game->id) }}">

                                <div class="item" style="min-height: 400px; display: flex; align-items: center;flex-direction: column">
                                    <!-- Image du jeu -->
                                    <img height="200" style="width: auto" src="{{ asset('storage/images/' . $game->link) }}" alt="{{ $game->name }}">
                                    <!-- Nom du jeu et catégorie -->
                                    <h4>{{ $game->name }}<br><span>{{ $game->category }}</span></h4>
                                    <!-- Informations supplémentaires -->
                                    <ul>
                                        <li><i class="fa fa-star"></i> {{$game->count}}</li> <!-- Exemple de rating aléatoire -->
                                        <li><i class="fa fa-download"></i> {{ $game->version  }}</li>
                                    </ul>
                                </div>
                                </a>

                            </div>
                        @endforeach
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
