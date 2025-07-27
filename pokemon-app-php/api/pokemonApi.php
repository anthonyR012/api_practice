<?php
function getPokemon($name) {
  $url = "https://pokeapi.co/api/v2/pokemon/" . urlencode($name);
  $response = file_get_contents($url);

  if (!$response) return null;

  $data = json_decode($response, true);

  return [
    'name' => $data['name'],
    'image' => $data['sprites']['front_default'],
    'weight' => $data['weight'],
    'height' => $data['height'],
    'types' => array_map(function($t) {
      return $t['type']['name'];
    }, $data['types']),
  ];
}
