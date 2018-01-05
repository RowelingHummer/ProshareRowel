<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class acordion {

    public $id;
    public $nombre;
    public $contenidoAcordion = array();

    public function __construct($id, $nombre, $contenidoAcordion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->contenidoAcordion = $contenidoAcordion;
    }

    public function generarAcordion() {
        echo '<div class="w3-card w3-round w3-hover-light-grey">';
        echo '<div class="w3-white w3-dropdown-full w3-dropdown-click">';
        echo '<button onclick="myFunction('."'" . $this->id . "'".')" class="w3-button w3-block w3-theme-l1 w3-left-align">';
        echo '<i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>' . $this->nombre . '</button>';
        echo '<div id="' . $this->id . '" class="w3-hide w3-container w3-dropdown-content ">';
        echo $this->contenidoAcordion();
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    private function contenidoAcordion() {
        for ($i = 0; $i < sizeof($this->contenidoAcordion); $i++) {
            echo '<a href="' . $this->contenidoAcordion[$i][1] . '" class="w3-button w3-block w3-left-align">' . $this->contenidoAcordion[$i][0] . '</a>';
        }
    }

}
?>


