<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ProShare ¡La comunidad al servicio!</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/stylesWEB.css">
        <script src="./js/header.js"></script>
        <script src="./js/modalLogin.js"></script>
        <script src="./js/navCategorias.js"></script>

    </head>
    <body class="w3-padding-32" onload="armarNavCategorias()">
        <?php
        include_once './estructura/header.php';
        include_once './estructura/modalLogin.php';
        ?>
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
                <?php include_once './clases/perfilCard.php'; ?>
                <?php include_once './estructura/acordion.php'; ?>
    </div>
    <div class="w3-col m6">
                <?php include_once './clases/categoriasReservadas.php'; ?>
    </div>
    <div class="w3-col m3">
                <?php include_once './clases/proximasReservas.php'; ?>
                <?php include_once './estructura/carrousel.php'; ?>
    </div>
  </div>
</div>
        <?php include_once './estructura/footer.php'; ?>
   
    </body>
</html>
