<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $nombreUsuario = "Kevin"; ?>

<nav class="navbar  w3-proshare-a navbar-fixed-top w3-hide-small">

    <div class=" w3-row container-fluid ">
        <div class="navbar-header w3-col l4 m12 s11 w3-center">
            <button type="button" class="navbar-toggle w3-hide-small" data-toggle="collapse" data-target="#myNavbar">
                <span class="w3-proshare-n icon-bar"></span>
                <span class="w3-proshare-n icon-bar"></span>
                <span class="w3-proshare-n icon-bar"></span>                        
            </button>

            <div class="">
                <a class=" w3-text-proshare-n" href="index.php">
                    <img class="icono-proshare" src="imagenes/ProShare_Naranja_800x180.png"   alt="Avatar">
                </a>
            </div>

        </div>
        <div class="nav navbar-nav w3-col l6 m8 w3-large w3-hide-small" id="myNavbar">
            <ul class="nav navbar-nav navbar-left ">
                <li>
                    <form class="navbar-form " role="search">
                        <div class="form-group input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-sm" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>        
                            <input type="text" class="form-control  input-sm" placeholder="¿En qué puedo ayudarte?" style="width:350px">
                        </div>
                    </form>
                </li>
                <li class="active"><a class="w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="fa fa-calendar"></i> </a></li>
                <li class="active"><a class="w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="fa fa-heart"></i> </a></li>
                <li class="active"><a class="w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="material-icons">shopping_cart</i> </a></li>
                <li class="active"><a class="w3-hover-proshare-n w3-text-proshare-n" href="#"><i class="fa fa-ticket"></i> </a></li>
            </ul>
        </div>
        <div class="w3-col l2 m2 w3-center w3-hover-proshare-n w3-text-proshare-n w3-padding">

                <?php
                if ($nombreUsuario == "") {
                    echo '<div><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></div>';
                } else {
                    echo '<div><a href="./perfil.php"><p class="w3-large">Hola, ' . $nombreUsuario . ' <span class="glyphicon glyphicon-user"></span></9></a></div>';
                }
                ?>
        </div>
    </div>
</nav>

<!--NAV MOVIL-->
<nav class="w3-top w3-hide-large w3-hide-medium ">
    <div class="w3-row w3-proshare-a w3-large w3-text-proshare-n">
        <div class="w3-col s2 w3-center w3-hover-proshare-n w3-padding-16">
                <?php
//                if ($nombreUsuario == "") {
//                    echo '<div><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></div>';
//                } else {
//                    echo '<div><a href="./perfil.php"><h2>Hola, ' . $nombreUsuario . '</h2> <span class="glyphicon glyphicon-user"></span></a></div>';
//                }
                ?>
        </div>
        <div class="w3-col s8 w3-center w3-hover-proshare-n w3-padding-16">
            <a href="index.php">
                <img class="icono-proshare" src="imagenes/ProShare_Naranja_800x180.png"   alt="Avatar">
            </a>
        </div>
        <div class="w3-col s2 w3-center w3-hover-proshare-n w3-padding-16">
                <?php
                if ($nombreUsuario == "") {
                    echo '<div><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></div>';
                } else {
                echo '<div><a href="./perfil.php"><p class="w3-hide-small">Hola, ' . $nombreUsuario . '</p> <span class="glyphicon glyphicon-user"></span></a></div>';
                }
                ?>
        </div>
    </div>
</nav>
