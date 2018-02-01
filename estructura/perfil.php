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
        <script src="./js/modals.js"></script>
        <script src="./js/navCategorias.js"></script>

    </head>
    <body class="rowel-padding-32" onload="armarNavCategorias()">
        <?php
        include_once './estructura/elementos/header.php';
        include_once './estructura/elementos/navInferiorMobile.php';
        include_once './estructura/elementos/modalLogin.php';
        ?>
        <div class="rowel-container rowel-content" style="max-width:1400px;margin-top:80px">    
            <!-- The Grid -->
            <div class="rowel-row">
                <!-- Left Column -->
                <div class="rowel-col l3 m4 s12">
                    <?php include_once './estructura/elementos/perfilCard.php'; ?>
                    <?php include_once './estructura/elementos/acordionPerfil.php'; ?><br>
                    <?php include_once './clases/proximasReservas.php'; ?>
                </div>
                <div class="rowel-col l6 m8 s12">
                    <?php include_once './estructura/elementos/ajustesGenerales.php'; ?>
                </div>
                <div class="rowel-col l3 m12 s12">

                    <?php include_once './estructura/elementos/carrousel.php'; ?>
                </div>
            </div>
        </div>
        <?php include_once './estructura/elementos/footer.php'; ?>

    </body>
</html>
