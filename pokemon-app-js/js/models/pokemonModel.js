
export function adaptPokemon(raw) {
    return {
      name: raw.name,
      image: raw.sprites.front_default,
      weight: raw.weight,
      height: raw.height,
      types: raw.types.map(t => t.type.name),
    };
  }
  