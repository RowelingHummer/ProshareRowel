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
<nav class="rowel-top rowel-wiquu-am rowel-hide-small ">
    <div class=" rowel-row rowel-bar rowel-padding">
        <div class="rowel-col l4 m12 rowel-bar-item rowel-center">
            <div class="  " >
                <a href="./index.php">
                    <img class="icono-wiquu" src="./imagenes/wiqüu.png" alt="Avatar">
                </a>
            </div>
        </div>
        <div class="rowel-col l6 m9 rowel-hide-small ">
            
            <button class="rowel-bar-item rowel-button  rowel-light-gray rowel-mobile rowel-hover-wiquu-az"><span class="glyphicon glyphicon-search"></span></button>
            <input class="rowel-bar-item rowel-input  rowel-white rowel-mobile  rowel-search" type="text" placeholder="¿En qué puedo ayudarte?" >
            
            <a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-calendar"></i> </a>
            <a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-heart"></i> </a>
            <a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-shopping-cart"></i> </a>
            <a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-ticket"></i> </a>
        </div>
        <div class="rowel-col l2 m3 ">

            <?php
            if ($nombreUsuario == "") {
                $e = '<div class="rowel-right  rowel-hover-wiquu-az rowel-text-wiquu-az"><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></div>';
            } else {
                $e = '<div class="rowel-dropdown-click rowel-right">';
                $e.= '<spam class="rowel-hide-small "> ' . $nombreUsuario . ' </spam>';
                $e.= '<button class="rowel-button" onclick="myFunction('."'avatar'".')">';
                $e.= '<img src="./imagenes/avatar.jpg" class="rowel-circle" style="height:25px;width:25px" alt="Avatar">';
                $e.= '<i class="fa fa-caret-down"></i></button>';
                $e.= '<div id="avatar" class="rowel-dropdown-content rowel-bar-block rowel-card">';
                $e.= '<a href="./perfil.php" class="rowel-bar-item rowel-button">Mi perfil</a>';
                $e.= '<a href="#" class="rowel-bar-item rowel-button">Link 2</a>';
                $e.= '<a href="#" class="rowel-bar-item rowel-button">Link 3</a>';
                $e.= '</div>';
            }
            echo "$e";
            ?>
        </div>
    </div>
</nav>
<!--NAV MOVIL-->
<nav class="rowel-top rowel-hide-large rowel-hide-medium ">
    <div class="rowel-row rowel-wiquu-am rowel-large rowel-text-wiquu-az">
        <div class="rowel-col s2 rowel-center rowel-hover-wiquu-az rowel-padding-16">
            <?php
            if ($nombreUsuario == "") {
                echo '<div><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></div>';
            } else {
                echo '<div><a href="./perfil.php"><p class="rowel-hide-small">Hola, ' . $nombreUsuario . '</p> <img src="' . $urlImagenPerfil . '" class="rowel-circle" style="height:25px;width:25px" alt="Avatar"></a></div>';
            }
            ?>
        </div>
        <div class="rowel-col s8 rowel-center rowel-hover-wiquu-az rowel-padding-16">
            <a href="index.php">
                <img class="icono-wiquu" src="imagenes/ProShare_Naranja_800x180.png"   alt="Avatar">
            </a>
        </div>
        <div class="rowel-col s2 rowel-center rowel-hover-wiquu-az rowel-padding-16">

        </div>
    </div>
</nav>
