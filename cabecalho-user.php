<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!--Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importar Materilize CSS-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"/>
    <!-- Para mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo.png" />
  </head>
  <body>
    <nav class="indigo lighten-1" role="navigation">
      <div class="nav-wrapper container">
        <ul class="right hide-on-med-and-down">
          <li><a href="logout.php">Sair</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="admin_config.php">Configurações</a></li>
        </ul>
        <ul id="nav-mobile" class="sidenav">
          <li><a href="logout.php">Sair</a></li>
        </ul>
        <a id="logo-container" href="#" class="brand-logo">SOLOGIN</a>
        <a href="index.php" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
        </a>
      </div>
    </nav>