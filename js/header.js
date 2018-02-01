/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("rowel-show") == -1) {
        x.className += " rowel-show";
        x.previousElementSibling.className += " rowel-theme-d1";
    } else { 
        x.className = x.className.replace("rowel-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" rowel-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("rowel-show") == -1) {
        x.className += " rowel-show";
    } else { 
        x.className = x.className.replace(" rowel-show", "");
    }
}