<?php

/**
 * Esta clase crea objetos carrusel
 * @author Kevin López <kevin.lopez@rowel.co>
 * @copyright (c) 2017, Rowel Ingeniería
 */
class formulario {

    //put your code here

    public $formulario = array("", "", "", "", "");
    public $submit = array("", "");
    private $camposFormulario = array(array("", "", "", "", "", "", "", "", "", ""));
    private $camposSelect = array("" => "");

    /**
     * 
     * setter ( array(nombre , clases , accion ))
     * 
     * @param string  $formulario           array(nombre , clases , accion )
     * @param string  $submit               array(nombre , clases )
     * @param string  $camposFormulario     array ( Tipo , label , nombre , placeholder , clases , valor por defecto , valor Maximo , valor Minimo , otros atributos )
     * @param string  $camposSelect         array  (nombre , clases , accion )
     */
    public function __construct($formulario = array("", "", "", "", ""), $submit = array("", ""), $camposFormulario = array(array("", "", "", "", "", "", "", "", "", "")), $camposSelect = array("" => array("" => "", "" => ""))) {
        $this->setFormulario($formulario);
        $this->setSubmit($submit);
        $this->setCamposFormulario($camposFormulario);
        $this->setCamposSelect($camposSelect);
    }

    /**
     * 
     * setter ( array(nombre , clasesTitulo , clasesFormulario , accion , method))
     * 
     * @param string  $formulario   array
     */
    protected function setFormulario($formulario) {

        $valoresPredeterminadosFormulario = array("Mi Formulario", "w3-center ", "w3-container w3-white  w3-margin", "./action_page.php", "post");
        for ($i = 0; $i < sizeof($valoresPredeterminadosFormulario); $i++) {
            if ($formulario[$i] !== "") {
                $this->formulario[$i] = $formulario[$i];
            } else {
                $this->formulario[$i] = $valoresPredeterminadosFormulario[$i];
            }
        }
    }

    /**
     * 
     * setter ( array(nombre , clases ))
     * 
     * @param string  $submit   array
     */
    protected function setSubmit($submit) {
        $valoresPredeterminadosSubmit = array("Enviar", "w3-button w3-block w3-section w3-proshare-n w3-ripple w3-padding");
        for ($i = 0; $i < sizeof($valoresPredeterminadosSubmit); $i++) {
            if ($submit[$i] !== "") {
                $this->submit[$i] = $submit[$i];
            } else {
                $this->submit[$i] = $valoresPredeterminadosSubmit[$i];
            }
        }
    }

    /**
     * 
     * setter array(array( Tipo , label , clasesLabel, nombre , placeholder , clases , valor por defecto , valor Maximo , valor Minimo , otros atributos ))
     * 
     * @param string  $camposFormulario   array
     */
    protected function setCamposFormulario($camposFormulario) {
        $valoresPredeterminadosCamposFormulario = array("text", "", " w3-large w3-text-proshare-a", "entrada", "Entrada de texto", "w3-input ", "", "", "", "");
        for ($i = 0; $i < sizeof($camposFormulario); $i++) {
            for ($j = 0; $j < sizeof($valoresPredeterminadosCamposFormulario); $j++) {
                if ($camposFormulario[$i][$j] !== "") {
                    $this->camposFormulario[$i][$j] = $camposFormulario[$i][$j];
                } else {
                    $this->camposFormulario[$i][$j] = $valoresPredeterminadosCamposFormulario[$j];
                }
            }
        }
    }

    /**
     * 
     * setter ( Tipo , label , nombre , placeholder , clases , valor por defecto , valor Maximo , valor Minimo , otros atributos )
     * 
     * @param string  $camposSelect   array
     */
    protected function setCamposSelect($camposSelect) {
        foreach ($camposSelect as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                if ($value2[$key2] != "") {
                    $this->camposSelect[$key1][$key2] = $value2;
                } else {
                    $this->camposSelect[$key1][$key2] = "";
                }
            }
        }
    }

    public function generarFormulario() {
        $e = '<form action="' . $this->formulario[3] . '" class="' . $this->formulario[2] . '" method="' . $this->formulario[4] . '">';
        $e .= $this->generarTitulo();
        $e .= $this->generarCampos();
        $e .= $this->generarBotonAccion();
        $e .= '</form>';
        return $e;
    }

    private function generarTitulo() {
        $e = '<h1 class=" ' . $this->formulario[1] . '"><strong>' . $this->formulario[0] . '</strong></h2>';
        return $e;
    }

    private function generarBotonAccion() {
        $e = '<button class="' . $this->submit[1] . '"><strong>' . $this->submit[0] . '</strong></button>';
        return $e;
    }

    protected function generarCampos() {
        $camposFormulario = $this->camposFormulario;
        $e = '';
        for ($i = 0; $i < sizeof($camposFormulario); $i++) {
            $e .= '<div class="w3-section">';
            $e .= $this->generarLabel($camposFormulario[$i][1], $camposFormulario[$i][2]);
            $e .= $this->generarCampo($camposFormulario[$i][0], $camposFormulario[$i][3], $camposFormulario[$i][4], $camposFormulario[$i][5], $camposFormulario[$i][6], $camposFormulario[$i][7], $camposFormulario[$i][8], $camposFormulario[$i][9]);
            $e .= '</div>';
        }
        return $e;
    }

    private function generarLabel($label, $clases) {
        $tipoIcono = $label;
        if (strpos($tipoIcono, "fa-") !== FALSE) {
            $e = '<i class="fa ' . $tipoIcono . '  ' . $clases . '"></i>';
        } elseif (strpos($tipoIcono, "material-icons") !== FALSE) {
            $divisionMaterialIcons = explode(" ", $tipoIcono);
            $e = '<i class="' . $divisionMaterialIcons[0] . '  ' . $clases . '">' . $divisionMaterialIcons[1] . '</i>';
        } elseif (strpos($tipoIcono, "glyphicon") !== FALSE) {
            $e = '<i class="glyphicon ' . $tipoIcono . '  ' . $clases . '"></i>';
        } else {
            $e = '<label class=" ' . $clases . '">' . $tipoIcono . '</label>';
        }
        return $e;
    }

    private function generarCampo($tipo, $nombre, $placeholder, $clases, $valor, $max, $min, $otherAttributes) {

        switch ($tipo) {
            case "select":
                $camposSelect = $this->camposSelect[$nombre];
                $e = '<select  class="' . $clases . '" name="' . $nombre . '" ' . $otherAttributes . '>';
                $e .= '<option value="" disabled selected>' . $placeholder . '</option>';
                foreach ($camposSelect as $key => $value) {
                    $e .= '<option value="' . $key . '">' . $value . '</option>';
                }
                $e .= '</select>';
                break;
            case "textarea":
                $e = '<textarea  class="' . $clases . '" name="' . $nombre . '"  placeholder="' . $placeholder . '" ' . $otherAttributes . '>';
                $e .= "$valor";
                $e .= '</textarea>';
                break;

            default:

                $e = '<input class="' . $clases . '" name="' . $nombre . '" type="' . $tipo . '" placeholder="' . $placeholder . '" value="' . $valor . '" max="' . $max . '" min="' . $min . '" ' . $otherAttributes . ' >';
                break;
        }

        return $e;
    }

}
?>
<!--<!DOCTYPE html>


<form action="/action_page.php" class="w3-container w3-white w3-text-proshare-n w3-margin">
    <h2 class="w3-center">Contact Us</h2>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
        </div>
    </div>

    <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>

</form>-->
