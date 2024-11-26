<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GameController extends Controller
{

    public function index() :View{
        $gamesByCategory = Game::all()->groupBy('category');
        return view('store.home',compact('gamesByCategory'));
    }
    public function show($id)
    {
        // Récupérer le jeu par son ID
        $game = Game::findOrFail($id);

        // Retourner une vue avec les informations du jeu
        return view('store.show', compact('game'));
    }

    public function create() : View
    {
        // Récupérer toutes les équipes
        $teams = Team::all();

        // Passer les équipes à la vue
        return view('store.create', compact('teams'));
    }
    public function store(Request $request) : RedirectResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'version' => 'required|string|max:50',
                'count' => 'required|integer',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'team_id' => 'nullable|exists:teams,id',
            ]);

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images', $fileName, 'public');

            // Création du jeu
            Game::create([
                'name' => $validated['name'],
                'category' => $validated['category'],
                'version' => $validated['version'],
                'count' => $validated['count'],
                'description' => $validated['description'],
                'link' => $fileName,
                'team_id' => $validated['team_id'],
            ]);

            return redirect()->route('game.index')->with('success', 'Jeu ajouté avec succès !');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }
    }

    public function gameByCategorie($category) : View {
        $games = Game::all()->where('category', $category);
        return \view('store.categorie', compact('games'));
    }

}
