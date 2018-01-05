<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class acordion {

    public $id;
    public $nombre;
    public $icono;
    public $contenidoAcordion = array();

    public function __construct($id, $nombre, $contenidoAcordion,$icono) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->icono = $icono;
        $this->contenidoAcordion = $contenidoAcordion;
    }

    public function generarAcordion() {
        $e = '<div class="w3-card w3-round w3-hover-light-grey">';
        $e .= '<div class="w3-white">';
        $e .= '<button onclick="myFunction(' . "'" . $this->id . "'" . ')" class="w3-button w3-block w3-theme-l1 w3-left-align w3-row">';
        $e .= '<div class="w3-col l2 m2 s2 ">'.$this->generarIcono() .' </div><div class="w3-col l10 m10 s10 ">   '. $this->nombre . '</div></button>';
        $e .= '<div id="' . $this->id . '" class="w3-hide w3-container  ">';
        $e .= $this->contenidoAcordion();
        $e .= '</div>';
        $e .= '</div>';
        $e .= '</div>';
        echo "$e";
    }

    private function generarIcono() {
        $tipoIcono = $this->icono;
        if (strpos($tipoIcono, "fa-") !== FALSE) {
            $e = '<i class="fa ' . $this->icono . '"></i>';
        } elseif (strpos($tipoIcono, "material-icons") !== FALSE) {
            $divisionMaterialIcons = explode(" ", $this->icono);
            $e = '<i class="' . $divisionMaterialIcons[0] . ' ">' . $divisionMaterialIcons[1] . '</i>';
        } elseif (strpos($tipoIcono, "glyphicon") !== FALSE) {
            $e = '<i class="glyphicon ' . $this->icono . '"></i>';
        }
        return $e;
    }

    private function contenidoAcordion() {
        $e = "";
        for ($i = 0; $i < sizeof($this->contenidoAcordion); $i++) {
            $e .= '<a href="' . $this->contenidoAcordion[$i][1] . '" class="w3-button w3-block w3-left-align">' . $this->contenidoAcordion[$i][0] . '</a>';
        }
        return $e;
    }

}
