<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './clases/acordion.php';

$contenido = array(array("Terminos y condiciones",
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
$acordion = new acordion("acordionAyuda","Ayuda",$contenido);
$acordion->generarAcordion();