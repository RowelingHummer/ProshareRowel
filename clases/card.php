<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class card {

    private $color;
    private $esquinas;

    public function setVariables($color, $esquinas) {
        $this->esquinas = $esquinas;
        $this->color = $color;
    }

    protected function crearCard($contenido) {
        $e = '<div class="rowel-card rowel-' . $this->esquinas . ' rowel-' . $this->color . '">';
        $e .= "$contenido";
        $e .= '</div>';
        return $e;
    }

}

class perfilCard extends card {

    private $usuario;
    private $urlImagen;
    private $profesion;
    private $ciudad;
    private $cumpleaños;

    public function __construct($color = "white", $esquinas = "round", $usuario = "Usuario Proshare", $urlImagen = "./imagenes/Avatar.jpg", $profesion = "", $ciudad = "", $cumpleaños = "") {
        $this->setVariables($color, $esquinas);
        $this->usuario = $usuario;
        $this->urlImagen = $urlImagen;
        $this->profesion = $profesion;
        $this->ciudad = $ciudad;
        $this->cumpleaños = $cumpleaños;
    }

    public function mostrarPerfilCard() {
        $contenido = $this->agregarImagenUsuario();
        $contenido .= '<div class="rowel-container">';
        $contenido .= $this->agregarProfesion();
        $contenido .= $this->agregarCiudad();
        $contenido .= $this->agregarCumpleaños();
        $contenido .= '</div>';
        $imprimir=$this->crearCard($contenido)."<br>";
        echo "$imprimir";
    }

    private function agregarImagenUsuario() {
        if ($this->profesion != "") {
            $e = '<div class="rowel-display-container rowel-hover-opacity" style="width:100%">
                        <img src="' . $this->urlImagen . '" alt="Avatar" style="width:100%">
                        <div class="rowel-display-middle rowel-display-hover rowel-xlarge">
                            <button class="rowel-button rowel-black">' . $this->usuario . '</button>
                        </div>
                  </div>';          
                    
        }
        return $e;
    }

    private function agregarProfesion() {
        if ($this->profesion != "") {
            $e = '<p><i class="fa fa-pencil fa-fw rowel-padding rowel-margin-right rowel-text-theme"></i>' . $this->profesion . '</p>';
        }
        return $e;
    }

    private function agregarCiudad() {
        if ($this->ciudad != "") {
            $e = '<p><i class="fa fa-home fa-fw rowel-padding rowel-margin-right rowel-text-theme"></i>' . $this->ciudad . '</p>';
        }
        return $e;
    }

    private function agregarCumpleaños() {
        if ($this->cumpleaños != "") {
            $e = '<p><i class="fa fa-birthday-cake fa-fw rowel-padding rowel-margin-right rowel-text-theme"></i>' . $this->cumpleaños . '</p>';
        }
        return $e;
    }

}



