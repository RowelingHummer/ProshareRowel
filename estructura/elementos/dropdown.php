<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './clases/dropdown.php';
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
$dropdownAyuda = new dropdown("acordionAyuda", "Ayuda", $contenidoAyuda);
$dropdownAyuda->generarDropdown();
if ($idEmpresa !== "") {
    $dropdownMiEmpresa = new dropdown("acordionMiEmpresa", "MiEmpresa", $contenidoMiEmpresa);
    $dropdownMiEmpresa->generarDropdown();
}