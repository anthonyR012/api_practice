

<form method="GET" action="index.php" class="search-form">
<label for="name">Buscar Pokémon:</label>
<input type="text" id="name" name="name" placeholder="Nombre del Pokémon" required>
    <input type="hidden" name="controller" value="pokemon">
    <input type="hidden" name="action" value="showPokemonDetails">
<button type="submit" class="search-button">Buscar</button>
</form>
<br>