<?php

include './clases/jumbotron2.php';

$contenido = array(array("¿Quienes somos?",
        "En ProShare vivirás una nueva experiencia.Somos un nuevo concepto de comunidad donde cada integrante contribuye a un mejor servicio."
    ),
    array("¿Quieres hacer parte de la comunidad?",
        "con tu talento puedes apoyar a la comunidad para ser , darle una mano a alguien cuando lo necesite"
    ),
);
$jumbotron = new jumbotron2($contenido,300);
$jumbotron->mostrarJumbotron2();

