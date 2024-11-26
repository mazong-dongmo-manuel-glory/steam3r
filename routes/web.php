<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\GameController::class,'index'])->name('game.index');
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');
Route::get('/add', [GameController::class, 'create'])->name('games.create');
Route::post('/store', [GameController::class, 'store'])->name('games.store');
Route::get('/game/{category}',[GameController::class,'gameByCategorie'])->name('game.category');
