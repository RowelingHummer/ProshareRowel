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
        $e  = '<div class="w3-card w3-round w3-hover-light-grey">';
        $e .= '<div class="w3-white w3-dropdown-full w3-dropdown-click">';
        $e .= '<button onclick="myFunction('."'" . $this->id . "'".')" class="w3-button w3-block w3-theme-l1 w3-left-align">';
        $e .= '<i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>' . $this->nombre . '</button>';
        $e .= '<div id="' . $this->id . '" class="w3-hide w3-container w3-dropdown-content ">';
        $e .= $this->contenidoDropdown();
        $e .= '</div>';
        $e .= '</div>';
        $e .= '</div>';
        echo "$e";
    }

    private function contenidoDropdown() {
        $e = "";
        for ($i = 0; $i < sizeof($this->contenidoDropdown); $i++) {
            $e .= '<a href="' . $this->contenidoDropdown[$i][1] . '" class="w3-button w3-block w3-left-align">' . $this->contenidoDropdown[$i][0] . '</a>';
        }
        return $e;
    }

}


