
export function renderPokemonCard(pokemon) {
    return `
      <div class="card">
        <img src="${pokemon.image}" alt="${pokemon.name}">
        <h2>${pokemon.name}</h2>
        <p>Peso: ${pokemon.weight}</p>
        <p>Altura: ${pokemon.height}</p>
        <p>Tipos: ${pokemon.types.join(", ")}</p>
      </div>
    `;
  }
  