<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function pokemons()
    {
        $subtitulo = 'Preço dos Pokemons';
        $pokemons = array(
            array("Bulbasaur", 'Planta', 550.00, 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png'),
            array("Charmander", 'Fogo', 550.00, 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/4.png'),
            array("Squirtle", 'Água', 550.00, 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/7.png'),
            array("Pikachu", 'Eletricidade', 550.00, 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png'),
        );


        return view('pokemon.pokemons', compact('subtitulo', 'pokemons'));
    }
}
