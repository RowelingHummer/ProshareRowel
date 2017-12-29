<?php
/** 
 * Esta clase crea objetos carrusel
 * @author Kevin López <kevin.lopez@rowel.co>
 *@copyright (c) 2017, Rowel Ingeniería
 */
class carrousel{
    // atributos
    /**
     *  los atributos aqui presente estan obtienen las propiedades basicas del carrusel
     */
        public $array_imagenes = array();
        public $nombreCarrusel;
        public $tamañoCarrusel;
        public $width;
        public $height;
        public $time;
        public $detencionHover = "";
        
    //metodos
    /**
     * este es el constructor del objeto, inicializa las variables con las cuales se generará el carrusel 
     * 
     * ($nombre,$tamaño,$arregloImagenes,$ancho,$alto,$tiempo,$hover)
     * 
     * @param string  $nombre             string sin espacios
     * @param int     $tamañoArreglo      int del tamaño del arreglo de imagenes
     * @param string  $arregloImagenes    array con la direccion relativa (al sitio donde se usara el carrusel) de las imagenes
     * @param int     $ancho              int con el ancho al cual se colocaran las imagenes
     * @param int     $alto               int con el alto al cual se colocaran las imagenes
     * @param int     $tiempo             int con el tiempo en milisegundos de la transicion de las imagenes
     * @param int     $hover              booleano que indica si se desea que la transicion automatica se detenga cuando el cursor este sobre el carrusel
     */
    public function __construct($nombre,$tamañoArreglo,$arregloImagenes,$ancho,$alto,$tiempo = 2000,$hover = false){
        $this->nombreCarrusel=$nombre;
        $this->tamañoCarrusel=$tamañoArreglo;
        $this->array_imagenes=$arregloImagenes;
        $this->width=$ancho;
        $this->height=$alto;
        $this->time=$tiempo;
        if($hover==true){$this->detencionHover='data-pause="hover"';}
    }
    /**
     * metodo publico que permite la visualizacion del objeto
     */
    public function mostrarCarrusel(){
        echo'<div id="'.$this->nombreCarrusel.'" class="carousel slide" data-ride="carousel" data-interval="'.$this->time.'" '.$this->detencionHover.'>';
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
    private function indicadores(){
        echo '<ol class="carousel-indicators">';
        for ($i =0;$i < $this->tamañoCarrusel;$i++){
            if($i==0){
                echo '<li data-target="#'.$this->nombreCarrusel.'" data-slide-to="'.$i.'" class="active"></li>';  
            }else {
                echo '<li data-target="#'.$this->nombreCarrusel.'" data-slide-to="'.$i.'"></li>';  
            }
        }
        echo '</ol>';
    }
    /**
     * Esta funcion es de tipo private debido a que genera codigo que solo puede implementarse en esta clase, 
     * genera las divisiones de envolturas en las cuales van embebidas las imegenes que se muestran en el carrusel
     */
    private function envolturas(){
       echo '<div class="carousel-inner" role="listbox">';
       for ($i =0;$i < $this->tamañoCarrusel;$i++){
            if($i==0){               
                echo'<div class="item active">';
            }else{
                echo'<div class="item">';
            }
            echo'<img src="'.$this->array_imagenes[$i].'" alt="Chania" width="'.$this->width.'" height="'.$this->height.'">';
            echo'</div>';          
       }
       echo '</div>';
    }
    /**
     * Esta funcion es de tipo private debido a que genera codigo que solo puede implementarse en esta clase, contiene los controles 
     * derecha e izquierda que permiten cambiar las imagenes del carrusel
     */
    private function controles(){
            echo '<a class="left carousel-control" href="#'.$this->nombreCarrusel.'" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#'.$this->nombreCarrusel.'" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>';
    }
    
}