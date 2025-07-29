<?php
function renderPokemonCard(Pokemon $pokemon) {
    $types = implode(', ', $pokemon->getTypes());
  return "
    <div class='card'>
      <img src='{$pokemon->getImage()}' alt='{$pokemon->getName()}'>
      <h2>{$pokemon->getName()}</h2>
      <p>Peso: {$pokemon->getWeight()}</p>
      <p>Altura: {$pokemon->getHeight()}</p>
      <p>Tipos: {$types}</p>
    </div>
  ";
}
