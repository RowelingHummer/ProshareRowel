<?php
include './clases/formulario.php';
$age = array("Peter" => array("1", "2", "3"), "Ben" => array("4", "5", "6"), "Joe" => array("7", "8", "9"));
$formulario = array("Editar Perfil","w3-text-proshare-n w3-xxlarge w3-center","w3-text-proshare-a ","funcion()","","");/** nombre , clases , accion */
$submit = array("Guardar","w3-button  w3-section w3-proshare-n w3-ripple w3-padding w3-hover-proshare-a w3-hover-text-proshare-n");/** nombre , clases */
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