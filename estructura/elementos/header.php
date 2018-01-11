<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$nombreUsuario = "Margarita";
$urlImagenPerfil = "./imagenes/Avatar.jpg";
?>
<!--NAV DESKTOP-->
<nav class="w3-top w3-proshare-a w3-hide-small ">
    <div class=" w3-row w3-bar w3-padding">
        <div class="w3-col l4 m12 w3-bar-item w3-center">
            <div class="  " >
                <a href="./index.php">
                    <img class="icono-proshare" src="./imagenes/ProShare_Naranja_800x180.png" alt="Avatar">
                </a>
            </div>
        </div>
        <div class="w3-col l6 m9 w3-hide-small ">
            
            <button class="w3-bar-item w3-button  w3-light-gray w3-mobile w3-hover-proshare-n"><span class="glyphicon glyphicon-search"></span></button>
            <input class="w3-bar-item w3-input  w3-white w3-mobile  w3-search" type="text" placeholder="¿En qué puedo ayudarte?" >
            
            <a class=" w3-bar-item  w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="fa fa-calendar"></i> </a>
            <a class=" w3-bar-item  w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="fa fa-heart"></i> </a>
            <a class=" w3-bar-item  w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="fa fa-shopping-cart"></i> </a>
            <a class=" w3-bar-item  w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="fa fa-ticket"></i> </a>
        </div>
        <div class="w3-col l2 m3 ">

            <?php
            if ($nombreUsuario == "") {
                $e = '<div class="w3-right  w3-hover-proshare-n w3-text-proshare-n"><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></div>';
            } else {
                $e = '<div class="w3-dropdown-click w3-right">';
                $e.= '<spam class="w3-hide-small "> ' . $nombreUsuario . ' </spam>';
                $e.= '<button class="w3-button" onclick="myFunction('."'avatar'".')">';
                $e.= '<img src="./imagenes/avatar.jpg" class="w3-circle" style="height:25px;width:25px" alt="Avatar">';
                $e.= '<i class="fa fa-caret-down"></i></button>';
                $e.= '<div id="avatar" class="w3-dropdown-content w3-bar-block w3-card">';
                $e.= '<a href="./perfil.php" class="w3-bar-item w3-button">Mi perfil</a>';
                $e.= '<a href="#" class="w3-bar-item w3-button">Link 2</a>';
                $e.= '<a href="#" class="w3-bar-item w3-button">Link 3</a>';
                $e.= '</div>';
            }
            echo "$e";
            ?>
        </div>
    </div>
</nav>
<!--NAV MOVIL-->
<nav class="w3-top w3-hide-large w3-hide-medium ">
    <div class="w3-row w3-proshare-a w3-large w3-text-proshare-n">
        <div class="w3-col s2 w3-center w3-hover-proshare-n w3-padding-16">
            <?php
            if ($nombreUsuario == "") {
                echo '<div><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></div>';
            } else {
                echo '<div><a href="./perfil.php"><p class="w3-hide-small">Hola, ' . $nombreUsuario . '</p> <img src="' . $urlImagenPerfil . '" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a></div>';
            }
            ?>
        </div>
        <div class="w3-col s8 w3-center w3-hover-proshare-n w3-padding-16">
            <a href="index.php">
                <img class="icono-proshare" src="imagenes/ProShare_Naranja_800x180.png"   alt="Avatar">
            </a>
        </div>
        <div class="w3-col s2 w3-center w3-hover-proshare-n w3-padding-16">

        </div>
    </div>
</nav>
