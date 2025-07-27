<?php
function renderPokemonCard($pokemon) {
  $types = implode(', ', $pokemon['types']);
  return "
    <div class='card'>
      <img src='{$pokemon['image']}' alt='{$pokemon['name']}'>
      <h2>{$pokemon['name']}</h2>
      <p>Peso: {$pokemon['weight']}</p>
      <p>Altura: {$pokemon['height']}</p>
      <p>Tipos: {$types}</p>
    </div>
  ";
}
