<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="modalLogin" class="rowel-modal" >
    <div class="rowel-modal-content rowel-card-4 rowel-animate-zoom" style="max-width:400px">

        <div id="modalLoginHeader" class="rowel-center rowel-margin"><br>
            <span onclick="closeModalLogin()" class="rowel-button rowel-xlarge rowel-hover-red rowel-display-topright" title="Close Modal">&times;</span>
            <img src="imagenes/ProShare_FondoAzul_LetrasNaranja_800x800.png" alt="Avatar" style="width:40%" class="rowel-circle">
        </div>
        <div id="formLogin" class="form">
            <form class="rowel-panel" action="/Login.php">
                <div class="rowel-section rowel-margin-top">
                    <div class="rowel-container">
                        <input class="rowel-input rowel-border rowel-margin-top" type="text" placeholder="Correo Electrónico" name="usrname" required>
                        <input class="rowel-input rowel-border" type="password" placeholder="Contraseña" name="psw" required>
                        <button class="rowel-button rowel-block rowel-wiquu-az rowel-section" type="submit">Ingresar</button>
                        <input class="rowel-check rowel-margin-top" type="checkbox" checked="checked"> Recuerdame
                    </div>                   
                </div>
            </form>
            <div class="rowel-panel rowel-row rowel-center">
                <div class="rowel-button rowel-half rowel-hover-text-purple rowel-hide-small rowel-border-right" onclick="changeForm('formRecuperarPass')"> Olvide Contraseña</div>
                <div class="rowel-button rowel-half rowel-hover-text-purple rowel-hide-small " onclick="changeForm('formRegistro')">Registrarme</div>
            </div>
        </div>
        <div id="formRegistro" class="form" style="display:none">
            <form class="rowel-panel" action="/Registrarse.php">
                <div class="rowel-section rowel-margin-top">
                    <div class="rowel-container">
                        <input class="rowel-input rowel-border rowel-margin-top" type="text" placeholder="Correo Electrónico" name="usrname" required>
                        <input class="rowel-input rowel-border" type="password" placeholder="Contraseña" name="psw" required>
                        <input class="rowel-input rowel-border" type="password" placeholder="Repetir Contraseña" name="repetirpsw" required>
                        <button class="rowel-button rowel-block rowel-wiquu-az rowel-section" type="submit">Registrarse</button>
                    </div>                   
                </div>
            </form>
        </div>
        <div id="formRecuperarPass" class="form" style="display:none">
            <form class="rowel-panel" action="/RecuperarPassword.php">
                <div class="rowel-section rowel-margin-top">
                    <div class="rowel-container">
                        <p class="rowel-center">Enviaremos un mensaje al siguiente correo con un link de verificación para que puedas acceder nuevamente a tu cuenta</p>
                        <input class="rowel-input rowel-border rowel-margin-top" type="text" placeholder="Correo Electrónico" name="usrname" required>
                        <button class="rowel-button rowel-block rowel-wiquu-az rowel-section" type="submit">Ingresar</button>
                    </div>                   
                </div>
            </form>
        </div>

        <div id="modalLoginFooter" class="rowel-panel rowel-margin rowel-padding">
            <p><button class="rowel-btn rowel-block rowel-facebook">Ingresar con Facebook</button></p>
            <p><button class="rowel-btn rowel-block rowel-red">ingresar con Gmail</button></p>
        </div>

    </div>
</div>