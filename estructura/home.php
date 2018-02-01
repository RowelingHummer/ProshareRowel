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
        <link rel="stylesheet" href="css/stylesWEB.css">
        <script src="js/header.js"></script>
        <script src="js/modals.js"></script>
        <script src="js/navCategorias.js"></script>

    </head>
    <body class="rowel-padding-32" onload="armarNavCategorias()">
        <?php
        include_once './estructura/elementos/header.php';
        include_once './estructura/elementos/navInferiorMobile.php';
        include_once './estructura/elementos/modalLogin.php';
        ?>
        <div class="carrusel" style="margin-top: 20px">
            <?php
            include_once './estructura/elementos/carrousel.php';
            ?>
 
        </div>
        <div class="rowel-container container">
            <?php
            include_once './estructura/elementos/navCategorias.php';
            ?>             
        </div>
        
            <?php
            include_once './estructura/elementos/navCategoriasMobile.php';
            ?>  
       
        <div class='container rowel-text-wiquu-az rowel-padding-16'><h1><strong>Promociones</strong></h1></div>
        <div>
            <?php
            include_once './estructura/elementos/promociones.php';
            ?>         
        </div>
        <div>
            <?php
            include_once './estructura/elementos/jumbotron2.php';
            ?>         
        </div>
        <div>
            <?php
            include_once './estructura/elementos/navCategorias.php';
            ?>         
        </div>
        <div class="container">
            <h1> santiago quiere que wiquu lo saque de pobre </h1>
            <h5>some text...</h5>
            <h5>some text...</h5>
            <h5>some text...</h5>
            <h5>some text...</h5>
            <h5>some text...</h5>
            <h5>some text...</h5>
            <h5>some text...</h5>

        </div>
        <?php include_once './estructura/elementos/footer.php'; ?>
        <br><br>
        <script>
            var $thumbs_wrapper = $('#navCategorias');
            var $thumbs = $('#scrollmenu');
            var w1 = $thumbs_wrapper.innerWidth();
            var w2 = $thumbs.innerWidth();
            console.log("w1:" + w1 + " w2:" + w2);
        </script>
    </body>
</html>
