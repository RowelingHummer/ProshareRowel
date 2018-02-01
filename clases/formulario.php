<?php

/**
 * Esta clase crea objetos carrusel
 * @author Kevin López <kevin.lopez@rowel.co>
 * @copyright (c) 2017, Rowel Ingeniería
 */
class formulario {

    //put your code here

    public $formulario = array("", "", "", "", "", "");
    public $submit = array("", "");
    protected $camposFormulario = array(array("", "", "", "", "", "", "", "", "", ""));
    protected $camposSelect = array("" => "");

    /**
     * 
     * setter ( array(nombre , clases , accion ))
     * 
     * @param string  $formulario           array (nombre , clasesTitulo , clasesFormulario , accion , method, posicionLabels)
     * @param string  $submit               array ( nombre , clases )
     * @param string  $camposFormulario     array ( Tipo , label , nombre , placeholder , clases , valor por defecto , valor Maximo , valor Minimo , otros atributos )
     * @param string  $camposSelect         array  (nombre , clases , accion )
     */
    public function __construct($formulario = array("", "", "", "", "", ""), $submit = array("", ""), $camposFormulario = array(array("", "", "", "", "", "", "", "", "", "")), $camposSelect = array("" => array("" => "", "" => ""))) {
        $this->setFormulario($formulario);
        $this->setSubmit($submit);
        $this->setCamposFormulario($camposFormulario);
        $this->setCamposSelect($camposSelect);
    }

    /**
     * 
     * setter ( array(nombre , clasesTitulo , clasesFormulario , accion , method, posicionLabels))
     * 
     * @param string  $formulario   array
     */
    protected function setFormulario($formulario) {

        $valoresPredeterminadosFormulario = array("Mi Formulario", "rowel-center ", "rowel-container rowel-white  rowel-padding", "./action_page.php", "post","left");
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
        $valoresPredeterminadosSubmit = array("Enviar", "rowel-button rowel-block rowel-section rowel-wiquu-az rowel-ripple rowel-padding");
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
        $valoresPredeterminadosCamposFormulario = array("text", "", "rowel-small rowel-text-wiquu-am", "entrada", "Entrada de texto", "rowel-input rowel-border rowel-small ", "", "", "", "");
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
        $e = '<h1 class="' . $this->formulario[1] . '"><strong>' . $this->formulario[0] . '</strong></h2>';
        return $e;
    }

    private function generarBotonAccion() {
        $e = '<div class="rowel-center">';
        $e .= '<button class="' . $this->submit[1] . '"><strong>' . $this->submit[0] . '</strong></button>';
        $e .= '</div>';
        return $e;
    }

    protected function generarCampos() {
        $camposFormulario = $this->camposFormulario;
        $e = '';
        for ($i = 0; $i < sizeof($camposFormulario); $i++) {
            $label = $this->generarLabel($camposFormulario[$i][1], $camposFormulario[$i][2]);
            $campo = $this->generarCampo($camposFormulario[$i][0], $camposFormulario[$i][3], $camposFormulario[$i][4], $camposFormulario[$i][5], $camposFormulario[$i][6], $camposFormulario[$i][7], $camposFormulario[$i][8], $camposFormulario[$i][9]);
            $posicionLabel = $this->formulario[5];
            $e .= $this->ubicacionLabelCampo($posicionLabel, $label, $campo);
        }
        return $e;
    }

    private function ubicacionLabelCampo($posicionLabel, $label, $campo) {
        switch ($posicionLabel) {
            case "left":
                $e = '<div class="rowel-section"><div class="rowel-row rowel-container"><div class="rowel-col l2 rowel-right-align rowel-margin-right">';
                $e .= $label . '</div><div class="rowel-col l9">';
                $e .= $campo . '</div></div></div>';
                break;
            case "right":
                $e = '<div class="rowel-section"><div class="rowel-row rowel-container"><div class="rowel-col l9 rowel-right-align rowel-margin-right">';
                $e .= $campo . '</div><div class="rowel-col l2">';
                $e .= $label . '</div></div></div>';
                break;
            case "top":
                $e = $label;
                $e .= $campo;
                break;
            case "bottom":
                $e = $campo;
                $e .= $label;
                break;
            default:
                break;
        }
        return $e;
    }

    private function generarLabel($label, $clases) {
        $tipoIcono = $label;
        if (strpos($tipoIcono, "fa-") !== FALSE) {
            $e = '<i class="fa ' . $tipoIcono . ' ' . $clases . '"></i>';
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

class formularioEditarPerfil extends formulario {
    
        public function generarFormularioEditarPerfil() {
        $e = '<form action="' . $this->formulario[3] . '" class="' . $this->formulario[2] . '" method="' . $this->formulario[4] . '">';
        $e .= $this->generarTitulo();
        $e .= $this->generarCampos();
        $e .= $this->generarBotonAccion();
        $e .= '</form>';
        return $e;
    }
}
