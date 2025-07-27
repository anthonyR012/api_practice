<?php
require_once 'api/pokemonApi.php';
require_once 'components/card.php';

$pokemon = getPokemon('bulbasaur');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pokémon App PHP</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="app">
    <?php if ($pokemon): ?>
      <?= renderPokemonCard($pokemon); ?>
    <?php else: ?>
      <p class="error">No se pudo obtener el Pokémon.</p>
    <?php endif; ?>
  </div>
</body>
</html>
