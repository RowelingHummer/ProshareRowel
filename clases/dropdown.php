<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dropdown {

    public $id;
    public $nombre;
    public $contenidoDropdown = array();

    public function __construct($id, $nombre, $contenidoDropdown) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->contenidoDropdown = $contenidoDropdown;
    }

    public function generarDropdown() {
        $e  = '<div class="rowel-card rowel-round rowel-hover-light-grey">';
        $e .= '<div class="rowel-white rowel-dropdown-full rowel-dropdown-click">';
        $e .= '<button onclick="myFunction('."'" . $this->id . "'".')" class="rowel-button rowel-block rowel-theme-l1 rowel-left-align">';
        $e .= '<i class="fa fa-circle-o-notch fa-fw rowel-margin-right"></i>' . $this->nombre . '</button>';
        $e .= '<div id="' . $this->id . '" class="rowel-hide rowel-container rowel-dropdown-content ">';
        $e .= $this->contenidoDropdown();
        $e .= '</div>';
        $e .= '</div>';
        $e .= '</div>';
        echo "$e";
    }

    private function contenidoDropdown() {
        $e = "";
        for ($i = 0; $i < sizeof($this->contenidoDropdown); $i++) {
            $e .= '<a href="' . $this->contenidoDropdown[$i][1] . '" class="rowel-button rowel-block rowel-left-align">' . $this->contenidoDropdown[$i][0] . '</a>';
        }
        return $e;
    }

}


