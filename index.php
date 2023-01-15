<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/styles/pokemons.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/colors.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/mobile.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="./images/Poké_Ball_icon.svg.png" type="image/x-icon">
</head>
<body>
    
    <header>
        <img src="images/logo-pokedex.png" class="logo" alt="Logo">
        <h1 class="title">Selecione seus Pokémons</h1>
    </header>

    <form class="pokedex" method="post" action="render-pokemons.php">
        <label class="pokemon">
            <img src="images/cabeca-pikachu.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Pikachu</span>
            <input type="checkbox" class="pokemon-check" name="pikachu" id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-bulbasaur.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Bulbasaur</span>
            <input type="checkbox" class="pokemon-check" name="bulbasauro" id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-charmander.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Charmander</span>
            <input type="checkbox" class="pokemon-check" name="charmander"id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-gyarados.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Gyarados</span>
            <input type="checkbox" class="pokemon-check" name="gyarados" id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-gengar.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Gengar</span>
            <input type="checkbox" class="pokemon-check" name="gendar" id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-dragonite.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Dragonite</span>
            <input type="checkbox" class="pokemon-check" name="dragonite" id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-dugtrio.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Dugtrio</span>
            <input type="checkbox" class="pokemon-check" name="dugtrio" id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-koffing.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Koffing</span>
            <input type="checkbox" class="pokemon-check" name="koffing" id="">
        </label>
        <label class="pokemon">
            <img src="images/cabeca-alakazam.png" class="pokemon-head" alt="">
            <span class="pokemon-name">Alakazam</span>
            <input type="checkbox" class="pokemon-check" name="alakazam" id="">
        </label>
    </form>
    <button class="button" type="submit" id="pokedex" form="pokedex-form">Enviar</button>

    <script src="js/main.js"></script>
</body>
</html>