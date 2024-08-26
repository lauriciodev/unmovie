<?php
require_once "globals.php";
require_once "database.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=i, initial-scale=1.0">
  <title>Unmovie</title>
  <link rel="shortcut icon" href="<?= $BASE_URL?>img/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= $BASE_URL?>css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.css"
    integrity="sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <nav id="main-navbar" class="navbar navbar-expand-lg bg-dark">
    <a href="<?= $BASE_URL ?>" class="logo-link">
      <img id="logo" class="logo" src="<?= $BASE_URL?>img/logo1.png" alt="">
      <span class="unmovie-title">UnMovie</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
      aria-expanded="false" aria-label="toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <form action="" method="get" id="search-form" class=" form-inline my-2 my-lg-0">
      <input type="text" name="query" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar filmes"
        ara-label="Search">
      <button class="btn my-2 my-sm-0" type="submit">
        buscar
      </button>
    </form>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="link-auth" href="<?= $BASE_URL ?> auth.php" class="nav-link"> Entrar / Cadastrar</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid" id="main-container">
    <h2>Corpo do site</h2>
  </div>


  <footer id="footer">
    <div class="social-container">
      <p>&copy; Desenvolvido por <span>Lauricio De Sousa</span></p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.js"
    integrity="sha512-lsA4IzLaXH0A+uH6JQTuz6DbhqxmVygrWv1CpC/s5vGyMqlnP0y+RYt65vKxbaVq+H6OzbbRtxzf+Zbj20alGw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>