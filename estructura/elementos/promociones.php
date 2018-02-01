<?php

include './clases/promociones.php';

$promocionBelleza = array(array("imagenes/Belleza_2.jpg", "Corte Dama a mitad de precio", '$20.000', '50%',"#"),
    array("imagenes/Belleza_Peluqueria_Alisado_Mujer_2.jpg", "Alizado especial para ti", '$35.000', '35%',"#")
);
$promocionComida = array(array("imagenes/Comida_preparada_pizza.jpg", "Reserva tu mesa y pide un 30% de descuento", '$55.000', '30%',"#"),
    array("imagenes/Comida_preparada_pollo_crispy.jpg", "reserva tu mesa para tu cumpleaños", '$87.000', '25%',"#")
);
$promocionVehiculos = array(array("imagenes/Vehiculos_lavado_1.jpg", "polichado de locura", '$80.000', '50%',"#"),
    array("imagenes/Vehiculos_lavado_3.jpg", "lavado completo", '$99.900', '35%',"#")
);
$belleza = new promociones("belleza", sizeof($promocionBelleza), $promocionBelleza);
$comida = new promociones("comida", sizeof($promocionComida), $promocionComida);
$Vehiculos = new promociones("Vehiculos", sizeof($promocionVehiculos), $promocionVehiculos);
?>
<div class="jumbotron">
    <div class="container">
        <div class="rowel-row rowel-container">
            <div class="rowel-col l4 rowel-padding">
<?php $belleza->mostrarPromocion() ?>
            </div>
            <div class="rowel-col l4 rowel-padding">
<?php $comida->mostrarPromocion() ?>
            </div>
            <div class="rowel-col l4 rowel-padding">
<?php $Vehiculos->mostrarPromocion() ?>
            </div>
        </div>
    </div>
</div>
