<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::prefix('usagers')->group(function(){
    Route::get('/login',[\App\Http\Controllers\UsagersController::class,'showLoginForm'])->name('usagers.login');
    Route::get('/singup',[\App\Http\Controllers\UsagersController::class,'showSingUpForm'])->name('usagers.singup');
    Route::post('/dosingup',[\App\Http\Controllers\UsagersController::class,'doSingUp'])->name('usagers.doSingUp');
    Route::post('/dologin',[\App\Http\Controllers\UsagersController::class,'doLogin'])->name('usagers.doLogin');
});
