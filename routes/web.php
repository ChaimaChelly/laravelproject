<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {
    return ("Bienvenue sur le site!");
});
