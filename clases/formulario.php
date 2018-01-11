<?php

/**
 * Esta clase crea objetos carrusel
 * @author Kevin López <kevin.lopez@rowel.co>
 * @copyright (c) 2017, Rowel Ingeniería
 */
class formulario {

    //put your code here

    public $formulario = array();
    private $camposFormulario = array();
    public $submit = array();
    private $camposSelect = array();

    /**
     * 
     * setter ( array(nombre , clases , accion ))
     * 
     * @param string  $formulario           array(nombre , clases , accion )
     * @param string  $submit               array(nombre , clases )
     * @param string  $camposFormulario     array ( Tipo , label , nombre , placeholder , clases , valor por defecto , valor Maximo , valor Minimo , otros atributos )
     * @param string  $camposSelect         array  (nombre , clases , accion )
     */
    public function __construct($formulario, $submit, $camposFormulario, $camposSelect) {
        setFormulario($formulario);
        setSubmit($submit);
        setCamposFormulario($camposFormulario);
        setCamposSelect($camposSelect);
    }

    /**
     * 
     * setter ( array(nombre , clases , accion ))
     * 
     * @param string  $formulario   array
     */
    public function setFormulario($formulario) {
        /**  */
        $valoresPredeterminadosFormulario = array("Mi Formulario", "w3-container w3-white w3-text-proshare-n w3-margin", "./action_page.php");
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
     * setter ( Tipo , label , nombre , placeholder , clases , valor por defecto , valor Maximo , valor Minimo , otros atributos )
     * 
     * @param string  $camposFormulario   array
     */
    protected function setCamposFormulario($camposFormulario) {
        $valoresPredeterminadosCamposFormulario = array("text", "entrada", "Entrada", "Entrada de texto", "w3-input", "", "", "", "");
        for ($i = 0; $i < sizeof($camposFormulario); $i++) {
            for ($j = 0; $j < sizeof($valoresPredeterminadosCamposFormulario); $j++) {
                if ($camposFormulario[$i][$j] !== "") {
                    $this->$camposFormulario[$i][$j] = $camposFormulario[$i][$j];
                } else {
                    $this->$camposFormulario[$i][$j] = $valoresPredeterminadosCamposFormulario[$j];
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

        foreach ($camposSelect as $key => $value) {
            if ($this->camposSelect[$key] != "") {
                $this->camposSelect[$key] = $value;
            } else {
                $this->camposSelect[$key] = "";
            }
        }
    }

    protected function generarFormulario($contenido) {
        $e = '<form action="' . $this->formulario[2] . '" class="' . $this->formulario[1] . '" method="' . $this->formulario[1] . '">';
        $e .= $this->generarTitulo();
        $e .= $this->generarCampos();
        $e .= $this->generarBotonAccion();
        $e .= '</form>';
        return $e;
    }

    private function generarTitulo() {
        $e = '<h2 class="w3-center">' . $this->formulario[0] . '</h2>';
        return $e;
    }

    private function generarBotonAccion() {
        $e = '<button class="' . $this->submit[1] . '">' . $this->submit[0] . '</button>';
        return $e;
    }

    protected function generarCampos() {
        $camposFormulario = $this->camposFormulario;
        
        for ($i = 0; $i < sizeof($camposFormulario); $i++) {
            $e = '<div class="w3-section">';
            $e .= $this->generarLabel($camposFormulario[$i][1]);
            $e .= $this->generarCampo($camposFormulario[$i][0], $camposFormulario[$i][2], $camposFormulario[$i][3], $camposFormulario[$i][4], $camposFormulario[$i][5], $camposFormulario[$i][6], $camposFormulario[$i][7], $camposFormulario[$i][8]);

            $e .= '</div>';
        }
    }

    private function generarLabel($i) {
        $tipoIcono = $i;
        if (strpos($tipoIcono, "fa-") !== FALSE) {
            $e = '<i class="fa ' . $tipoIcono . ' w3-xxlarge"></i>';
        } elseif (strpos($tipoIcono, "material-icons") !== FALSE) {
            $divisionMaterialIcons = explode(" ", $tipoIcono);
            $e = '<i class="' . $divisionMaterialIcons[0] . ' w3-xxlarge">' . $divisionMaterialIcons[1] . '</i>';
        } elseif (strpos($tipoIcono, "glyphicon") !== FALSE) {
            $e = '<i class="glyphicon ' . $tipoIcono . ' w3-xxlarge"></i>';
        } else {
            $e = '<label>' . $tipoIcono . '</label>';
        }
        return $e;
    }

    private function generarCampo($tipo, $nombre, $placeholder, $clases, $valor, $max, $min, $otherAttributes) {

        switch ($tipo) {
            case "select":
                $camposSelect= $this->camposSelect[$nombre];
                $e = '<select  class="' . $clases . '" name="' . $nombre . '" ' . $otherAttributes . '>';
                $e.= '<option value="" disabled selected>' . $placeholder . '</option>';
                foreach ($camposSelect as $key => $value) {
                    $e.='<option value="'.$key.'">'.$value.'</option>';
                }
                $e.='</select>';
                break;
            case "textarea":
                $e = '<textarea  class="' . $clases . '" name="' . $nombre . '"  placeholder="' . $placeholder . ' ' . $otherAttributes . '>';
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
    
}

$age = array("Peter" => array("1", "2", "3"), "Ben" => array("4", "5", "6"), "Joe" => array("7", "8", "9"));
?>
<!DOCTYPE html>


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

</form>
