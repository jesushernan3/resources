<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="with=device-with, initial-scale=1, maximum-scale=1"
    />
    <title>Recursos</title>
  <link rel="stylesheet" href="<?php echo $raiz;?>assets/css/main.css">
  </head>
  <body>

  <header>
    <div class="nav-bar">
      <h1><a href="<?php echo $raiz;?>index.php">RECURSOS</a></h1>
      <?php include('parciales/menu-principal.php');?>
      <div class="search-box">
        <form role="search" method="get" action="index.php" class="search-form">
          <input type="text" placeholder="Buscar..">
          <button class="boton-lupa">
            <svg class="icono-lupa" xml:space="preserve" enable-background="new 0 0 512 512" viewBox="0 0 512 512" height="24px" width="24px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
              <path d="M460.355,421.59L353.844,315.078c20.041-27.553,31.885-61.437,31.885-98.037 C385.729,124.934,310.793,50,218.686,50C126.58,50,51.645,124.934,51.645,217.041c0,92.106,74.936,167.041,167.041,167.041 c34.912,0,67.352-10.773,94.184-29.158L419.945,462L460.355,421.59z M100.631,217.041c0-65.096,52.959-118.056,118.055-118.056 c65.098,0,118.057,52.959,118.057,118.056c0,65.096-52.959,118.056-118.057,118.056C153.59,335.097,100.631,282.137,100.631,217.041 z" id="search-svg"></path>
            </svg>
          </button>
        </form>
      </div>
    
    </div>
  </header>
  <main>