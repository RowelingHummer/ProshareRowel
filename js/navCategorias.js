/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//funcion que arma los subservicios y crea la tabla con losn mismos.
var categorias, j, btnWeb,btnMb;
var categorias = {"belleza": ["belleza", "./imagenes/iconos/belleza.png", "belleza"],
    "automovil": ["automovil", "./imagenes/iconos/vehiculos.png", "automovil"],
    "deportes": ["comida", "./imagenes/iconos/comida.png", "deportes"],
    "mascotas": ["educacion", "./imagenes/iconos/educacion.png", "mascotas"],
    "hogar": ["hogar", "./imagenes/iconos/hogar.png", "hogar"],
    "profesional": ["profesional", "./imagenes/iconos/profesionales.png", "profesional"],
    "salud": ["salud", "./imagenes/iconos/salud.png", "salud"],
    "tecnologia": ["tecnologia", "./imagenes/iconos/tecnologia.png", "tecnologia"],
    "comida": ["comida", "./imagenes/iconos/belleza.png", "comida"],
    "soporte": ["oficina", "./imagenes/iconos/oficina.png", "soporte"],
    "culo": ["mascotas", "./imagenes/iconos/mascotas.png", "culo"],
    "cara": ["eventos", "./imagenes/iconos/eventos.png", "cara"],
    "perra": ["perra", "./imagenes/iconos/belleza.png", "perra"],
    "zorra": ["perra", "./imagenes/iconos/belleza.png", "perra"],
    "mola": ["mola", "./imagenes/iconos/belleza.png", "mola"]};
//the loading image

//the ul element

//the current image being shown
var $currImage = $('#st_main').children('img:first');



function buildThumbs() {
    console.log("estoy en buildThumbs");

    var $thumbs_wrapper = $('#navCategorias');
    var $thumbs = $('#scrollmenu');
    var w1 = $thumbs_wrapper.innerWidth();
    var w2 = $thumbs.innerWidth();
    console.log("w1:" + w1 + " w2:" + w2);
    var finalW = $thumbs.find('a').length * 120.5;
    $thumbs.css('width', finalW + 'px');
    makeScrollable($thumbs_wrapper, $thumbs);

}
function makeScrollable($outer, $inner) {
    console.log("estoy en makeScrollable");
    var extra = 200;
    //Get menu width
    var divWidth = $outer.width();
    console.log(divWidth);
    //Remove scrollbars
    $outer.css({
        overflow: 'hidden'
    });
    //Find last image in container
    var lastElem = $inner.find('a:last');

    $outer.scrollLeft(0);
    //When user move mouse over menu
    $outer.off('mousemove').on('mousemove', function (e) {
        var containerWidth = lastElem[0].offsetLeft + lastElem.outerWidth() + 2 * extra;
//        console.log(containerWidth);
        var left = (e.pageX - $outer.offset().left) * (containerWidth - divWidth) / divWidth - extra;
//        console.log(left);
        $outer.scrollLeft(left);
    });
}
function scrollRight() {
    var a = document.getElementById("scrollmenu");
    a.scrollBy(100, 0);
}
function scrollleft() {
    var a = document.getElementById("scrollmenu");
    a.scrollBy(-100, 0);
}
function armarNavCategorias() {
    var h1 = $('.holo1').height();
    var h2 = $('.holo2').height();
    console.log("h1:" + h1 + " h2:" + h2);
    if (h1>h2){
        $('holo2').css('height',h1+'px');
        var h3 = $('.holo1').height();
        var h4 = $('.holo2').height();
        console.log("h3:" + h3 + " h4:" + h4);
    }else{
        $('holo1').css('height',h2+'px');
        var h5 = $('.holo1').height();
        var h6 = $('.holo2').height();
        console.log("h5:" + h5 + " h6:" + h6);
        
    }
    var contenidoWeb = '.scrollmenu';
    var contenidoMobile = '.mobileMenu';
    $(contenidoWeb).empty();
    for (j in categorias) {
        btnWeb = '<a class="w3-btn w3-hover-proshare-n w3-large menu"><img src="' + categorias[j][1] + '"  width="25px" height="25px">' + categorias[j][0] + '</a>';
        btnMb = '<div class="w3-col m2 s3 w3-center w3-hover-proshare-n categorias" id="'+categorias[j][0]+'"style="height:60px" id=""><a href="'+ categorias[j][1] +'" class=" w3-small menu"><div style="height:40px"> <img src="' + categorias[j][1] + '"  class="w3-container"></div><div class="w3-container w3-center" style="height:20px">' + categorias[j][0] + '</div></a></div>';
        $(contenidoWeb).append(btnWeb);
        $(contenidoMobile).append(btnMb);
        console.log(j);
    }
    var $thumbs_wrapper = $('#navCategorias');
    var $thumbs = $('#scrollmenu');
    var w1 = $thumbs_wrapper.innerWidth();
    var w2 = $thumbs.innerWidth();
    console.log("w1:" + w1 + " w2:" + w2);
    buildThumbs();
}
function buscarCategorias() {
    var input, filter, mobileMenu, categorias, a, i;
    input = document.getElementById("buscarCategorias");
    filter = input.value.toUpperCase();
    mobileMenu = document.getElementById("mobileMenu");
    categorias = mobileMenu.getElementsByClassName("categorias");
    for (i = 0; i < categorias.length; i++) {
        if (categorias[i].id.toUpperCase().indexOf(filter) > -1) {
            categorias[i].style.display = "";
        } else {
            categorias[i].style.display = "none";
        }
    }
}