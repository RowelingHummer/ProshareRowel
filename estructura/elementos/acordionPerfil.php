<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './clases/acordion.php';
$idEmpresa = "1584";
$contenidoAyuda = array(array("Terminos y condiciones",
        "#"
    ),
    array("Politicas de Privacidad",
        "#"
    ),
    array("Contacto",
        "#"
    ),
    array("Asistencia al cliente",
        "#"
    ),
);
$contenidoMiEmpresa = array(array("Agenda del mes",
        "#"
    ),
    array("Reservas del dia",
        "#"
    ),
    array("Indices",
        "#"
    ),
    array("Estadisticas",
        "#"
    ),
);
echo '<div class="rowel-card">';
$acordionAyuda = new acordion("acordionAyuda", "Ayuda", $contenidoAyuda,"fa-circle-o-notch fa-fw");
$acordionAyuda->generarAcordion();
if ($idEmpresa !== "") {
    $acordionMiEmpresa = new acordion("acordionMiEmpresa", "MiEmpresa", $contenidoMiEmpresa,"material-icons business");
    $acordionMiEmpresa->generarAcordion();
}
echo '</div>';