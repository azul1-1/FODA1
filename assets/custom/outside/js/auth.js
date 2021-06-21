/* INICIO */
$(document).ready(function () {
    cambiarSeccion("a login");
});

/* CAMBIO DE SECCIONES */
$(document).on('click', '#btn-seccion-registro', function () {
    cambiarSeccion("a registro");
    cambiarCaritaA(":)", "volteada");
});

$(document).on('click', '#btn-seccion-login', function () {
    cambiarSeccion("a login");
    cambiarCaritaA(":)", "volteada");
});

$(document).on('click', '#btn-seccion-recuperar-clave', function (event) {
    event.preventDefault();
    cambiarSeccion("a recuperar clave");
});

function cambiarSeccion(nuevaSeccion) {
    let html;
    switch (nuevaSeccion) {
        case "a registro":
            //Activa registro
            $("#btn-seccion-registro").addClass("seccion-activa");
            $("#btn-seccion-registro").removeClass("seccion-inactiva");
            //Desactiva login
            $("#btn-seccion-login").addClass("seccion-inactiva");
            $("#btn-seccion-login").removeClass("seccion-activa");
            //Desactiva recuperar clave
            $("form").removeClass("seccion-activa");
            //Cambia sección a registro
            html = $("#contenedor-registro").html();
            $("#form-auth").html(html);
            break;
        case "a login":
            //Desactiva registro
            $("#btn-seccion-registro").addClass("seccion-inactiva");
            $("#btn-seccion-registro").removeClass("seccion-activa");
            //Activa login
            $("#btn-seccion-login").addClass("seccion-activa");
            $("#btn-seccion-login").removeClass("seccion-inactiva");
            //Desactiva recuperar clave
            $("form").removeClass("seccion-activa");
            //Cambia sección a login
            html = $("#contenedor-login").html();
            $("#form-auth").html(html);
            break;
        case "a recuperar clave":
            //Desactiva registro
            $("#btn-seccion-registro").addClass("seccion-inactiva");
            $("#btn-seccion-registro").removeClass("seccion-activa");
            //Desactiva login
            $("#btn-seccion-login").addClass("seccion-inactiva");
            $("#btn-seccion-login").removeClass("seccion-activa");
            //Activa recuperar clave
            $("form").addClass("seccion-activa");
            //Cambia sección a recuperar clave
            html = $("#contenedor-recuperar-clave").html();
            $("#form-auth").html(html);
            break;
    }
}

/* MENSAJES Y CARITAS */
$(document).on('mouseenter', '#btn-seccion-recuperar-clave', function () {
    cambiarCaritaA(":|", "volteada");
    mensaje("¿Olvidó su contraseña?");
});
$(document).on('mouseleave', '#btn-seccion-recuperar-clave', function () {
    cambiarCaritaA(":)", "volteada");
    mensajePorDefecto();
});

function cambiarCaritaA(carita, orientacion) {
    let smile = $("#carita");
    switch (orientacion) {
        case "volteada":
            smile.addClass("icon-volteado");
            smile.removeClass("icon-derecho");
            break;
        case "derecha":
            smile.addClass("icon-derecho");
            smile.removeClass("icon-volteado");
            break;
    }
    smile.text(carita);
}

function mensajePorDefecto() {
    $("#mensaje").text("Bienvenido, visitante");
}
function mensaje(texto) {
    $("#mensaje").text(texto);
}