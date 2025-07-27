
export async function getPokemon(name) {
    const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${name}`);
    if (!res.ok) throw new Error("Pokémon no encontrado");
    return await res.json();
  }
  