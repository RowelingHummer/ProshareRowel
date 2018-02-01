<?php

/**
 * Esta clase crea objetos Promociones
 * @author Kevin López <kevin.lopez@rowel.co>
 * @copyright (c) 2017, Rowel Ingeniería
 */
class promociones {

    // atributos
    /**
     *  los atributos aqui presente estan obtienen las propiedades basicas del carrusel
     */
    public $nombreCategoria;
    public $tamañoArray;
    public $array_promociones = array();
    
    public $width;
    public $height;
    public $time;

    //metodos
    /**
     * este es el constructor del objeto, inicializa las variables con las cuales se generará el carrusel 
     * 
     * ($nombre,$tamaño,$arregloImagenes,$ancho,$alto,$tiempo,$hover)
     * 
     * @param string  $categoria             sin espacios
     * @param int     $tamañoArreglo      tamaño del arreglo de imagenes
     * @param string  $arregloPromociones array (array(url,mensaje,valorReal,porcentajePromocion))con la direccion relativa (al sitio donde se usara el carrusel) de las imagenes
     * @param int     $ancho              ancho al cual se colocaran las imagenes
     * @param int     $alto               alto al cual se colocaran las imagenes
     * @param int     $tiempo             tiempo en milisegundos de la transicion de las imagenes
     */
    public function __construct($categoria, $tamañoArreglo, $arregloPromociones, $ancho = "100%", $alto = "200px", $tiempo = 5000) {
        $this->nombreCategoria = $categoria;
        $this->tamañoArray = $tamañoArreglo;
        $this->array_promociones = $arregloPromociones;
        $this->width = $ancho;
        $this->height = $alto;
        $this->time = $tiempo;
    }

    /**
     * metodo publico que permite la visualizacion del objeto
     */
    public function mostrarPromocion() {
        echo'<div id="' . $this->nombreCategoria . '" class="carousel slide rowel-card-4" data-ride="carousel" data-interval="' . $this->time . '" data-pause="hover">';
        $this->indicadores();
        $this->envolturas();
        $this->controles();
        echo '</div>';
    }

    /**
     * Esta funcion es de tipo private debido a que genera codigo que solo puede implementarse en esta clase, 
     * contiene el indicador de la imagen que se esta mostrando en el carrusel, este se encuentra sobre la 
     * imagen en la parte inferior central
     */
    private function indicadores() {
        echo '<ol class="carousel-indicators">';
        for ($i = 0; $i < $this->tamañoArray; $i++) {
            if ($i == 0) {
                echo '<li data-target="#' . $this->nombreCategoria . '" data-slide-to="' . $i . '" class="active"></li>';
            } else {
                echo '<li data-target="#' . $this->nombreCategoria . '" data-slide-to="' . $i . '"></li>';
            }
        }
        echo '</ol>';
    }

    /**
     * Esta funcion es de tipo private debido a que genera codigo que solo puede implementarse en esta clase, 
     * genera las divisiones de envolturas en las cuales van embebidas las imegenes que se muestran en el carrusel
     * de promociones
     */
    private function envolturas() {
        echo '<div class="carousel-inner" role="listbox">';
        for ($i = 0; $i < $this->tamañoArray; $i++) {
            if ($i == 0) {
                echo'<div class="item active">';
            } else {
                echo'<div class="item">';
            }
            echo '<a href="'.$this->array_promociones[$i][4] .'">';
            echo '  <div class="rowel-wiquu-am rowel-text-wiquu-az" >';
            echo '       <div class="rowel-display-container rowel-hover-opacity" >';
            echo '          <img src="' . $this->array_promociones[$i][0] . '" width="' . $this->width . '" height="' . $this->height . '">';
            echo '          <div class="rowel-display-topright ">';
            echo '           <div class=" rowel-panel"><div class="rowel-padding rowel-pale-red">' . $this->array_promociones[$i][2] . '</div><div class="rowel-padding rowel-pale-green">' . $this->array_promociones[$i][3] . '</div></div>';
            echo '          </div>';
            echo '       </div>';
            echo '       <div class="rowel-row rowel-center" >';
            echo '           <div class="rowel-panel" style="height:80px"><strong>' . $this->array_promociones[$i][1] . '</strong></div>';
            echo '        </div>';           
            echo '  </div>';
            echo '</a>';
            echo '</div>';
        }
        echo '</div>';
    }

    /**
     * Esta funcion es de tipo private debido a que genera codigo que solo puede implementarse en esta clase, contiene 
     * los controles derecha e izquierda que permiten cambiar las imagenes del carrusel de promociones
     */
    private function controles() {
        echo '<a class="left carousel-control" href="#' . $this->nombreCategoria . '" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#' . $this->nombreCategoria . '" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>';
    }

}