const pokemonChecks = document.querySelectorAll('.pokemon-check')

function pokemonChecked(event) {
    const pokemonbox = event.target.parentElement
    pokemonbox.classList.toggle('pokemon-checked')
}

pokemonChecks.forEach(check => check.addEventListener('input', pokemonChecked))