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
        $e = '<div class="rowel-card rowel-round rowel-hover-light-grey">';
        $e .= '<div class="rowel-white">';
        $e .= '<button onclick="myFunction(' . "'" . $this->id . "'" . ')" class="rowel-button rowel-block rowel-theme-l1 rowel-left-align rowel-row">';
        $e .= '<div class="rowel-col l2 m2 s2 ">'.$this->generarIcono() .' </div><div class="rowel-col l10 m10 s10 ">   '. $this->nombre . '</div></button>';
        $e .= '<div id="' . $this->id . '" class="rowel-hide rowel-container  ">';
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
            $e .= '<a href="' . $this->contenidoAcordion[$i][1] . '" class="rowel-button rowel-block rowel-left-align">' . $this->contenidoAcordion[$i][0] . '</a>';
        }
        return $e;
    }

}
