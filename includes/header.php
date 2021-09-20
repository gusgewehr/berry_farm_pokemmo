<?php   
  $mensagem = '';
  if (isset($_GET['status'])){
      switch ($_GET['status']){
          case 'success':
              $mensagem = '<div class="alert alert-success text-center"> Ação bem sucedida</div>';
              break;
          case 'error':
              $mensagem = '<div class="alert alert-danger text-center"> Ação não executada</div>';
              break;
      }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>POKEMMO Berry Farm
    </title>
    <link rel="stylesheet" href="static/styles.css">
  </head>
  <body>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Farm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="berry.php">Cadastrar Berry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="seed.php">Cadastrar Seed</a>
      </li>
    </ul>
    <?=$mensagem?>
<div class="container">

  