<?php
include './clases/carrousel.php';
?>

<div class="">
    <?php
    $imagenes = array("imagenes/Belleza_2.jpg","imagenes/Belleza_Peluqueria_Alisado_Mujer_2.jpg","imagenes/Comida_preparada_pizza.jpg","imagenes/Comida_preparada_pollo_crispy.jpg","imagenes/Vehiculos_lavado_1.jpg","imagenes/Vehiculos_lavado_3.jpg");
    $carrusel= new carrousel("myCarrousel", sizeof($imagenes) , $imagenes, 460, 345);
    $carrusel->mostrarCarrusel();
    ?>
</div>
