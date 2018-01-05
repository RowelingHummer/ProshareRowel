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
        $contenido = '<div class="w3-row-padding w3-margin-bottom">';
        $contenido .= $this->generarCuadricula();
        $contenido .= '</div>';
        echo "$contenido";
    }

    private function generarCuadricula() {
        $e="";
        for ($i = 0; $i < sizeof($this->ajustes); $i++) {
            $e .= '<div class="w3-third w3-panel ">';
            $e .= '<div class="w3-container w3-text-proshare-a w3-hover-text-proshare-n w3-border w3-round w3-border-proshare-a w3-hover-border-proshare-n  w3-padding-16" onclick="openModal('."'".$this->ajustes[$i][3]."'".')">';
            $e .= '<div class="w3-left">' . $this->generarIcono($i) . '</div>';
            $e .= '<div class="w3-right"><h5>'.$this->ajustes[$i][1].'</h5></div>';
            $e .= '<div class="w3-clear"></div>';
            $e .= '<h5>'.$this->ajustes[$i][2].'</h5>';
            $e .= '</div>';
            $e .= '</div>';
        }
        return $e;
    }

    private function generarIcono($i) {
        $tipoIcono = $this->ajustes[$i][0];
        if (strpos($tipoIcono, "fa-") !== FALSE) {
            $e = '<i class="fa ' . $this->ajustes[$i][0] . ' w3-xxxlarge"></i>';
        } elseif (strpos($tipoIcono, "material-icons") !== FALSE) {
            $divisionMaterialIcons= explode(" ", $this->ajustes[$i][0]);
            $e = '<i class="' . $divisionMaterialIcons[0] . ' w3-xxxlarge">' . $divisionMaterialIcons[1] . '</i>';
        } elseif (strpos($tipoIcono, "glyphicon") !== FALSE) {
            $e = '<i class="glyphicon ' . $this->ajustes[$i][0] . ' w3-xxxlarge"></i>';
        }
        return $e;
    }

}
?>

    