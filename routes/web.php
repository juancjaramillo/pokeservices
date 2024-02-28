<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PokemonController;

Route::get('/', [PokemonController::class, 'index']);
Route::post('/guardar-pokemon', [PokemonController::class, 'guardarPokemon']);




Route::get('/mostrar-pokemons', [PokemonController::class, 'mostrarPokemons']);





