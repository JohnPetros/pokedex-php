<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pokedex</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles/global.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/colors.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/header.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/pokemon-card.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/mobile.css?v=<?php echo time(); ?>">
  <link rel="shortcut icon" href="./images/Poké_Ball_icon.svg.png" type="image/x-icon">

</head>

<body>
  <header>
    <img src="images/logo-pokedex.png" class="logo" alt="Logo" />
    <a class="button" href="index.php">Voltar</a>
  </header>

  <main class="cards-container">
    <?php
    if (isset($_POST['pikachu'])) {
     include_once("./pokemons/pikachu.html");
    }

    if (isset($_POST['bulbasauro'])) {
      include_once("./pokemons/bulbasauro.html");
    }

    if (isset($_POST['charmander'])) {
      include_once("./pokemons/charmander.html");
    }

    if (isset($_POST['gyarados'])) {
      include_once("./pokemons/gyarados.html");
    }

    if (isset($_POST['gendar'])) {
      include_once("./pokemons/gendar.html");
    }

    if (isset($_POST['dragonite'])) {
      include_once("./pokemons/dragonite.html");
    }

    if (isset($_POST['dugtrio'])) {
      include_once("./pokemons/dugtrio.html");
    }

    if (isset($_POST['koffing'])) {
      include_once("./pokemons/koffing.html");
    }

    if (isset($_POST['alakazam'])) {
      include_once("./pokemons/alakazam.html");
    }

    if (
      !isset($_POST['pikachu']) &&
      !isset($_POST['bulbasauro']) &&
      !isset($_POST['charmander']) &&
      !isset($_POST['gyarados']) &&
      !isset($_POST['gendar']) &&
      !isset($_POST['dragonite']) &&
      !isset($_POST['dugtrio']) &&
      !isset($_POST['koffing']) &&
      !isset($_POST['alakazam']) 
      ) {
        echo '
        <div class="error-message">
          Você não selecionou nenhum pokémon!
        </div>
        ';
      }
    ?>
  </main>
</body>

</html>