<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function index()
    {
        // Aquí deberías obtener los datos de la base de datos y pasarlos a la vista
        // por ejemplo: $pokemons = Pokemon::all();
        // return view('index', compact('pokemons'));
        return view('index');
    }

    public function guardarPokemon(Request $request)
    {
        try {
            // Validar los datos recibidos desde la solicitud AJAX
            $request->validate([
                'nombre' => 'required|string',
                'tipo' => 'required|string',
                'stardus' => 'required|string',
                'weight' => 'required|string',
                'height' => 'required|string',
                // ... otras validaciones ...
            ]);

            // Crear un nuevo Pokémon con los datos recibidos
            $pokemon = new Pokemon();
            $pokemon->nombre = $request->nombre;
            $pokemon->tipo = $request->tipo;
            $pokemon->stardus = $request->stardus;
            $pokemon->weight = $request->weight;
            $pokemon->height = $request->height;

            // Guardar el Pokémon en la base de datos
            $pokemon->save();

            // Puedes devolver una respuesta JSON si lo deseas
            return response()->json(['message' => 'Pokémon guardado exitosamente'], 200);
        } catch (\Exception $e) {
            // En caso de error, devolver una respuesta JSON con el mensaje de error
            return response()->json(['message' => 'Error al guardar el Pokémon', 'error' => $e->getMessage()], 500);
        }
    }


// PokemonController.php

public function mostrarPokemons()
{
    $pokemons = Pokemon::all();
    return view('mostrar-pokemons', compact('pokemons'));
}




}





