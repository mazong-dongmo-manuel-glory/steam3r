<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/login',function(){
    return view('usagers.login');
});
Route::get('/singup',function(){
    return view('usagers.singup');
});