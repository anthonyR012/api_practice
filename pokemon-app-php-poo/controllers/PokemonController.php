<?php
require_once 'models/Pokemon.php';
class PokemonController{
    public function showSearch(){
        require_once 'views/pokemon/search_pokemon.php';
    }

    public function showPokemonDetails(){
       
        if(isset($_GET["name"])) {
            $pokemon = $this->getPokemon($_GET["name"]);
            require_once 'views/pokemon/search_pokemon.php';
            require_once 'views/pokemon/pokemon_details.php';
        } else {
            // Handle case where no name is provided
            require_once 'views/pokemon/search_pokemon.php';
        }
    }


    public function getPokemon($name) {
        $url = "https://pokeapi.co/api/v2/pokemon/" . urlencode($name);
        $response = file_get_contents($url);

        if (!$response) return null;
        $data = json_decode($response, true);
        $pokemon = new Pokemon( 
            $data['name'],
            $data['sprites']['front_default'],
            $data['weight'],
            $data['height'],
            array_map(function($t) {
                return $t['type']['name'];
            }, $data['types'])
        );
        return $pokemon;
    }
    
}