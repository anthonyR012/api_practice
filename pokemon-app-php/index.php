<?php
require_once 'api/pokemonApi.php';
require_once 'components/card.php';

if(isset($_GET["name"])) {
  $pokemon = getPokemon($_GET["name"]);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pokémon App PHP</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
       <form method="GET" class="search-form">
        <label for="name">Buscar Pokémon:</label>
        <input type="text" id="name" name="name" placeholder="Nombre del Pokémon" required>
        <button type="submit" class="search-button">Buscar</button>
      </form>
      <br>
  <?php if(isset($_GET['name'])) : ?>
  <!-- pokemon-app-php/index.html -->
    <div id="app">
      <?php if ($pokemon): ?>
        <?= renderPokemonCard($pokemon); ?>
      <?php else: ?>
        <p class="error">No se pudo obtener el Pokémon.</p>
      <?php endif; ?>
    </div>
    <!-- pokemon-app-php/index.html -->
    <?php endif; ?>
</body>
</html>
