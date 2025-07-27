
import { getPokemon } from "../api/pokemonApi.js";
import { adaptPokemon } from "../models/pokemonModel.js";
import { renderPokemonCard } from "../components/card.js";

export async function renderHome() {
  const app = document.getElementById("app");
  try {
    const raw = await getPokemon("charmander");
    const pokemon = adaptPokemon(raw);
    app.innerHTML = renderPokemonCard(pokemon);
  } catch (err) {
    app.innerHTML = `<p class="error">${err.message}</p>`;
  }
}
