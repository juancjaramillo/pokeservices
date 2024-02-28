<!-- resources/views/mostrar-pokemons.blade.php -->

@extends('layouts.app') <!-- Indica que esta vista extiende el layout 'app.blade.php' -->

@section('content')
    <div class="container mt-5">
        <h2>Pokemons Guardados</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Polvo de estrellas</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <!-- Agrega más columnas según tus campos -->
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $pokemon)
                    <tr>
                        <td>{{ $pokemon->id }}</td>
                        <td>{{ $pokemon->nombre }}</td>
                        <td>{{ $pokemon->tipo }}</td>
                        <td>{{ $pokemon->stardus }}</td>
                        <td>{{ $pokemon->weight }}</td>
                        <td>{{ $pokemon->height }}</td>
                        <!-- Agrega más celdas según tus campos -->
                    </tr>
                @endforeach
            </tbody>
        </table>
     <!-- Botón de regreso -->
     <a href="http://localhost/pokemonfinal/" class="btn btn-primary">Regresar</a>
    </div>
@endsection
