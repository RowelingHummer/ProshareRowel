<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="modalLogin" class="w3-modal" >
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px">

        <div id="modalLoginHeader" class="w3-center w3-margin"><br>
            <span onclick="closeModalLogin()" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="imagenes/ProShare_FondoAzul_LetrasNaranja_800x800.png" alt="Avatar" style="width:40%" class="w3-circle">
        </div>
        <div id="formLogin" class="form">
            <form class="w3-panel" action="/Login.php">
                <div class="w3-section w3-margin-top">
                    <div class="w3-container">
                        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Correo Electrónico" name="usrname" required>
                        <input class="w3-input w3-border" type="password" placeholder="Contraseña" name="psw" required>
                        <button class="w3-button w3-block w3-proshare-n w3-section" type="submit">Ingresar</button>
                        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Recuerdame
                    </div>                   
                </div>
            </form>
            <div class="w3-panel w3-row w3-center">
                <div class="w3-button w3-half w3-hover-text-purple w3-hide-small w3-border-right" onclick="changeForm('formRecuperarPass')"> Olvide Contraseña</div>
                <div class="w3-button w3-half w3-hover-text-purple w3-hide-small " onclick="changeForm('formRegistro')">Registrarme</div>
            </div>
        </div>
        <div id="formRegistro" class="form" style="display:none">
            <form class="w3-panel" action="/Registrarse.php">
                <div class="w3-section w3-margin-top">
                    <div class="w3-container">
                        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Correo Electrónico" name="usrname" required>
                        <input class="w3-input w3-border" type="password" placeholder="Contraseña" name="psw" required>
                        <input class="w3-input w3-border" type="password" placeholder="Repetir Contraseña" name="repetirpsw" required>
                        <button class="w3-button w3-block w3-proshare-n w3-section" type="submit">Registrarse</button>
                    </div>                   
                </div>
            </form>
        </div>
        <div id="formRecuperarPass" class="form" style="display:none">
            <form class="w3-panel" action="/RecuperarPassword.php">
                <div class="w3-section w3-margin-top">
                    <div class="w3-container">
                        <p class="w3-center">Enviaremos un mensaje al siguiente correo con un link de verificación para que puedas acceder nuevamente a tu cuenta</p>
                        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Correo Electrónico" name="usrname" required>
                        <button class="w3-button w3-block w3-proshare-n w3-section" type="submit">Ingresar</button>
                    </div>                   
                </div>
            </form>
        </div>

        <div id="modalLoginFooter" class="w3-panel w3-margin w3-padding">
            <p><button class="w3-btn w3-block w3-facebook">Ingresar con Facebook</button></p>
            <p><button class="w3-btn w3-block w3-red">ingresar con Gmail</button></p>
        </div>

    </div>
</div>