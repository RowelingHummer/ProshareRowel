<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $nombreUsuario = "Cristian"; ?>

<nav class="navbar  w3-proshare-a navbar-fixed-top">
    
    <div class=" w3-row container-fluid ">
        <div class="navbar-header w3-col l4 m12 s12 w3-center">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="w3-proshare-n icon-bar"></span>
                <span class="w3-proshare-n icon-bar"></span>
                <span class="w3-proshare-n icon-bar"></span>                        
            </button>
            <a class=" w3-text-proshare-n" href="index.php">
                <div class="w3-xxlarge ">
                    <!--<i class="fa fa-home"></i>--> 
                    <img class="w3-padding" src="imagenes/ProShare_Naranja_800x180.png"  style="height:30%;width:30%" alt="Avatar">
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse w3-col l8 m12 s12 w3-xlarge" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
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



            <ul class="nav navbar-nav navbar-right w3-hover-proshare-n w3-text-proshare-n ">
                <?php
                if ($nombreUsuario == "") {
                    echo '<li><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span></a></li>';
                } else {
                    echo '<li><a href="./perfil.php">Hola, ' . $nombreUsuario . ' <span class="glyphicon glyphicon-user"></span></a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>


