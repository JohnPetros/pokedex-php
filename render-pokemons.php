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
      echo ' <div class="card-pokemon">
          <div class="card-header grass-type">
            <div class="card-pokemon-name">
              <h2>Bulbassauro</h2>
              <span>#002</span>
            </div>
            <div class="pokemon-type"><span>Grama</span></div>
            <div class="pokemon-image">
              <img src="images/bulbasaur.png" alt="" />
            </div>
          </div>
          <div class="pokemon-info">
            <div class="pokemon-status">
              <h3>Status</h3>
              <hr />
              <ul>
                <li>HP: 300</li>
                <li>ATAQUE: 400</li>
                <li>DEFESA: 900</li>
                <li>VELOCIDADE: 100</li>
                <li>TOTAL: 2000</li>
              </ul>
            </div>
  
            <div class="pokemon-skills">
              <h3>Habilidades</h3>
              <hr />
              <ul>
                <li>Lâmina Chicote</li>
                <li>Folhas de Navalha</li>
              </ul>
            </div>
          </div>
        </div>';
    }

    if (isset($_POST['charmander'])) {
      echo '  <div class="card-pokemon">
          <div class="card-header fire-type">
            <div class="card-pokemon-name">
              <h2>Charmander</h2>
              <span>#003</span>
            </div>
            <div class="pokemon-type"><span>Fogo</span></div>
            <div class="pokemon-image">
              <img src="images/charmander.png" alt="" />
            </div>
          </div>
          <div class="pokemon-info">
            <div class="pokemon-status">
              <h3>Status</h3>
              <hr />
              <ul>
                <li>HP: 500</li>
                <li>ATAQUE: 600</li>
                <li>DEFESA: 300</li>
                <li>VELOCIDADE: 400</li>
                <li>TOTAL: 1800</li>
              </ul>
            </div>
            <div class="pokemon-skills">
              <h3>Habilidades</h3>
              <hr />
              <ul>
                <li>Bola de Fogo</li>
                <li>Calda-Chicote</li>
              </ul>
            </div>
          </div>
        </div>';
    }

    if (isset($_POST['gyarados'])) {
      echo ' <div class="card-pokemon">
      <div class="card-header water-type">
        <div class="card-pokemon-name">
          <h2>Gyarados</h2>
          <span>#004</span>
        </div>
        <div class="pokemon-type"><span>Água</span></div>

        <div class="pokemon-image">
          <img src="images/gyarados.png" alt="" />
        </div>
      </div>
      <div class="pokemon-info">
        <div class="pokemon-status">
          <h3>Status</h3>
          <hr />
          <ul>
            <li>HP: 500</li>
            <li>ATAQUE: 300</li>
            <li>DEFESA: 800</li>
            <li>VELOCIDADE: 100</li>
            <li>TOTAL: 1700</li>
          </ul>
        </div>

        <div class="pokemon-skills">
          <h3>Habilidades</h3>
          <hr />
          <ul>
            <li>Jaser De água</li>
            <li>Hidro Bomba</li>
          </ul>
        </div>
      </div>
    </div>';
    }

    if (isset($_POST['gendar'])) {
      echo '<div class="card-pokemon">
      <div class="card-header dark-type">
        <div class="card-pokemon-name">
          <h2>Gengar</h2>
          <span>#005</span>
        </div>
        <div class="pokemon-type"><span>Trevas</span></div>

        <div class="pokemon-image">
          <img src="images/gengar.png" alt="" />
        </div>
      </div>
      <div class="pokemon-info">
        <div class="pokemon-status">
          <h3>Status</h3>
          <hr />
          <ul>
            <li>HP: 500</li>
            <li>ATAQUE: 200</li>
            <li>DEFESA: 700</li>
            <li>VELOCIDADE: 300</li>
            <li>TOTAL: 1700</li>
          </ul>
        </div>

        <div class="pokemon-skills">
          <h3>Habilidades</h3>
          <hr />
          <ul>
            <li>Hipnose</li>
            <li>Bola das Sombras</li>
          </ul>
        </div>
      </div>
    </div>';
    }

    if (isset($_POST['dragonite'])) {
      echo '<div class="card-pokemon">
      <div class="card-header flying-type">
        <div class="card-pokemon-name">
          <h2>Dragonite</h2>
          <span>#006</span>
        </div>
        <div class="pokemon-type"><span>Ar</span></div>

        <div class="pokemon-image">
          <img src="images/dragonite.png" alt="" />
        </div>
      </div>
      <div class="pokemon-info">
        <div class="pokemon-status">
          <h3>Status</h3>
          <hr />
          <ul>
            <li>HP: 400</li>
            <li>ATAQUE: 700</li>
            <li>DEFESA: 300</li>
            <li>VELOCIDADE: 500</li>
            <li>TOTAL: 1900</li>
          </ul>
        </div>

        <div class="pokemon-skills">
          <h3>Habilidades</h3>
          <hr />
          <ul>
            <li>Vendaval do Dragão</li>
            <li>Rajada de Ar</li>
          </ul>
        </div>
      </div>
    </div>';
    }

    if (isset($_POST['dugtrio'])) {
      echo ' <div class="card-pokemon">
      <div class="card-header ground-type">
        <div class="card-pokemon-name">
          <h2>Dugtrio</h2>
          <span>#007</span>
        </div>
        <div class="pokemon-type"><span>Terra</span></div>

        <div class="pokemon-image">
          <img src="images/Dugtrio.png" alt="" />
        </div>
      </div>
      <div class="pokemon-info">
        <div class="pokemon-status">
          <h3>Status</h3>
          <hr />
          <ul>
            <li>HP: 300</li>
            <li>ATAQUE: 600</li>
            <li>DEFESA: 500</li>
            <li>VELOCIDADE: 400</li>
            <li>TOTAL: 1800</li>
          </ul>
        </div>

        <div class="pokemon-skills">
          <h3>Habilidades</h3>
          <hr />
          <ul>
            <li>Nuvem de Poeira</li>
            <li>Armadilha de Areia</li>
          </ul>
        </div>
      </div>
    </div>';
    }

    if (isset($_POST['koffing'])) {
      echo ' <div class="card-pokemon">
      <div class="card-header poison-type">
        <div class="card-pokemon-name">
          <h2>Koffing</h2>
          <span>#008</span>
        </div>
        <div class="pokemon-type"><span>Veneno</span></div>

        <div class="pokemon-image">
          <img src="images/Koffing.png" alt="" />
        </div>
      </div>
      <div class="pokemon-info">
        <div class="pokemon-status">
          <h3>Status</h3>
          <hr />
          <ul>
            <li>HP: 300</li>
            <li>ATAQUE: 500</li>
            <li>DEFESA: 800</li>
            <li>VELOCIDADE: 200</li>
            <li>TOTAL: 1800</li>
          </ul>
        </div>

        <div class="pokemon-skills">
          <h3>Habilidades</h3>
          <hr />
          <ul>
            <li>Levitação</li>
            <li>Gás Neutralizante</li>
          </ul>
        </div>
      </div>
    </div>';
    }

    if (isset($_POST['alakazam'])) {
      echo '<div class="card-pokemon">
      <div class="card-header psychic-type">
        <div class="card-pokemon-name">
          <h2>Alakazam</h2>
          <span>#009</span>
        </div>
        <div class="pokemon-type"><span>Psíquico </span></div>

        <div class="pokemon-image">
          <img src="images/Alakazam.png" alt="" />
        </div>
      </div>
      <div class="pokemon-info">
        <div class="pokemon-status">
          <h3>Status</h3>
          <hr />
          <ul>
            <li>HP: 200</li>
            <li>ATAQUE: 700</li>
            <li>DEFESA: 300</li>
            <li>VELOCIDADE: 700</li>
            <li>TOTAL: 1900</li>
          </ul>
        </div>

        <div class="pokemon-skills">
          <h3>Habilidades</h3>
          <hr />
          <ul>
            <li>Foco Interior</li>
            <li>Sincronizar</li>
          </ul>
        </div>
      </div>
    </div>';
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