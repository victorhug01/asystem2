<?php
require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="shortcut icon" href="image/logo_site.png" type="image/x-icon" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://swiffyslider.com/configuration/?slider-item-ratio-value=slider-item-ratio-21x9&slider-nav-autoplay=slider-nav-autoplay&data-slider-nav-autoplay-interval=2500&preview-style=preview-images">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" #842dd0integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
  <title>ASystem</title>
</head>
</head>

<body>
  <div class="container-fluid">
    <div class="topo">
      <!-- Navbar Nova -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img src="image/logo_site.png" height="30" alt="MDB Logo" loading="lazy" />
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active font-weight-bold" aria-current="page" href="index.php?p=1"
                  style="color: #842dd0; margin: 5px;">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?p=2"
                  style="color: #842dd0; margin: 5px;">Notebooks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?p=3"
                  style="color: #842dd0; margin: 5px;">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://wa.me/5514981826717?"
                  style="color: #842dd0; margin: 5px;">Fale Conosco</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?p=5"
                  style="color: #842dd0; margin: 5px;">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?p=6"
                  style="color: #842dd0; margin: 5px;">Login</a>
              </li>
          </div>
        </div>
      </nav>
    </div>