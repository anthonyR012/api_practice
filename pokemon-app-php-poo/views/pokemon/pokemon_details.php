<?php
require_once 'views/components/card.php';
?>
<!-- pokemon-app-php/index.html -->
<div id="app">
    <?php if ($pokemon): ?>
    <?= renderPokemonCard($pokemon); ?>
    <?php else: ?>
    <p class="error">No se pudo obtener el Pokémon.</p>
    <?php endif; ?>
</div>
<!-- pokemon-app-php/index.html -->
