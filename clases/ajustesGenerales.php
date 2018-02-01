<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ajustesGenerales {

    public $ajustes = array();

    public function __construct($ajustes) {
        $this->ajustes = $ajustes;
    }

    public function mostrarAjustesPerfilGeneral() {
        $contenido = '<div class="rowel-row-padding rowel-margin-bottom">';
        $contenido .= $this->generarCuadricula();
        $contenido .= '</div>';
        echo "$contenido";
    }

    private function generarCuadricula() {
        $e="";
        for ($i = 0; $i < sizeof($this->ajustes); $i++) {
            $e .= '<div class="rowel-third rowel-panel " >';
            $e .= '<div class="rowel-container rowel-text-wiquu-am rowel-hover-text-wiquu-az rowel-border rowel-round rowel-border-wiquu-am rowel-hover-border-wiquu-az  rowel-padding-16" style="height:140px" onclick="openModal('."'".$this->ajustes[$i][3]."'".')">';
            $e .= '<div class="rowel-left">' . $this->generarLabel($this->ajustes[$i][0]) . '</div>';
            $e .= '<div class="rowel-right"><h5>'.$this->ajustes[$i][1].'</h5></div>';
            $e .= '<div class="rowel-clear"></div>';
            $e .= '<h5>'.$this->ajustes[$i][2].'</h5>';
            $e .= '</div>';
            $e .= '</div>';
        }
        return $e;
    }

    private function generarLabel($i) {
        $tipoIcono = $i;
        if (strpos($tipoIcono, "fa-") !== FALSE) {
            $e = '<i class="fa ' . $tipoIcono . ' rowel-xxlarge"></i>';
        } elseif (strpos($tipoIcono, "material-icons") !== FALSE) {
            $divisionMaterialIcons= explode(" ", $tipoIcono);
            $e = '<i class="' . $divisionMaterialIcons[0] . ' rowel-xxlarge">' . $divisionMaterialIcons[1] . '</i>';
        } elseif (strpos($tipoIcono, "glyphicon") !== FALSE) {
            $e = '<i class="glyphicon ' . $tipoIcono . ' rowel-xxlarge"></i>';
        } else {
            $e = '<label>'.$tipoIcono.'</label>';
        }
        return $e;
    }
}


    