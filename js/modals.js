/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function openModal(id){
    console.log(id);
}
function openModalLogin(){
    document.getElementById('modalLogin').style.display='block';
    document.getElementById('formLogin').style.display='block';
}
function changeForm(formName) {
    var i;
    var x = document.getElementsByClassName("form");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(formName).style.display = "block";  
}
function closeModalLogin(){
    document.getElementById('modalLogin').style.display = 'none';
    document.getElementById('formLogin').style.display = 'none';
    document.getElementById('formRegistro').style.display = 'none';
    document.getElementById('formRecuperarPass').style.display = 'none';
}
window.onclick = function(event) {
var modal = document.getElementById('modalLogin');
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

