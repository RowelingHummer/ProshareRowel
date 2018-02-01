<?php
include './clases/formulario.php';
$age = array("Peter" => array("1", "2", "3"), "Ben" => array("4", "5", "6"), "Joe" => array("7", "8", "9"));
$formulario = array("Editar Perfil","rowel-text-wiquu-az rowel-xxlarge rowel-center","rowel-text-wiquu-am ","funcion()","","");/** nombre , clases , accion */
$submit = array("Guardar","rowel-button rowel-section rowel-wiquu-az rowel-ripple rowel-padding rowel-hover-wiquu-am rowel-hover-text-wiquu-az");/** nombre , clases */
$camposFormulario = array(
    array("file",""   , "","Imagen","Nombre Usuario","","","","",""),
    array("text","Nombre Usuario"   , "","NombreUsuario","Nombre Usuario","","","","",""),
    array("text","Primer Nombre"    , "","PrimerNombre","Primer Nombre","","","","",""),
    array("text","Segundo Nombre"   , "","SegundoNombre","Segundo Nombre","","","","",""),
    array("text","Primer Apellido"  , "","PrimerApellido","Primer Apellido","","","","",""),
    array("text","Segundo Apellido" , "","SegundoApellido","Segundo Apellido","","","","",""),
    array("select","Tipo de Documento", "","TipoDocumento","Tipo de Documento","","","","",""),
    array("text","No. Documento"    , "","NoDocumento","No. Documento","","","","",""),
    array("text","Teléfono"         , "","Teléfono","Teléfono","","","","","")
);/**array(array( Tipo , label , clasesLabel, nombre , placeholder , clasesInput , valor por defecto , valor Maximo , valor Minimo , otros atributos ))*/
$camposSelect=array("TipoDocumento"=>array("1"=>"Cedula de ciudadania","2"=>"cedula de extranjeria","3"=>"Pasaporte","4"=>"Tarjeta de identidad"));
?>
<div class="">
    <?php
    $formularioEditarPerfil = new formularioEditarPerfil($formulario, $submit,$camposFormulario,$camposSelect);
    echo $formularioEditarPerfil->generarFormulario();
    ?>
</div>