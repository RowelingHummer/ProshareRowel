<?php

/** 
 * Esta clase crea objetos carrusel
 * @author Kevin López <kevin.lopez@rowel.co>
 *@copyright (c) 2017, Rowel Ingeniería
 */
class jumbotron2 {
    private $titulo = array();
    private $mensaje= array();
    private $height;
    //put your code here
    public function __construct($contenido,$height) {
        $this->titulo=array ($contenido[0][0],$contenido[1][0]);
        $this->mensaje=array ($contenido[0][1],$contenido[1][1]);
        $this->height=$height;
    }
    public function mostrarJumbotron2(){
        echo '<div class="" style="width:100%">';
        $this->row();
        echo '</div>';
    }
    private function row(){
        echo '<div class="rowel-cell-row rowel-center" >';
        $this->container($this->titulo[0], $this->mensaje[0],"rowel-light-gray");  
        $this->container($this->titulo[1], $this->mensaje[1],"rowel-wiquu-am");
        echo '</div>';   
    }
    private function container($titulo,$mensaje,$color) {
        echo '<div class="rowel-mobile rowel-padding-64 rowel-center  '.$color.' rowel-cell rowel-container" style="width:50%">';//style="height:'.$this->height.'px"
        echo "<h1 class='rowel-text-wiquu-az rowel-xxxlarge '><strong>$titulo</strong></h1>";
        echo "<p class='rowel-xlarge'>$mensaje</p>";
        echo '</div>';
    }
}
