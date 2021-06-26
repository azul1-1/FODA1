/* INICIO */
$(document).ready(function () {
    cambiarSeccion("a login");
    //cambiarFocoConEnter("txt-l-usuario"); //No funciona D:
});

/* CAMBIO DE SECCIONES */
$(document).on('click', '#btn-seccion-login', function () {
    cambiarSeccion("a login");
    cambiarCaritaA(":)", "volteada", "verde");
});

$(document).on('click', '#btn-seccion-registro', function () {
    cambiarSeccion("a registro");
    cambiarCaritaA(":)", "volteada", "verde");
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

/* BOTONES DE FORMULARIOS */
$(document).on('click', '#btn-login', function (event) {
    event.preventDefault();
    iniciarSeccion();
});

/* AJAX */
function iniciarSeccion() {
    let baseUrl = $("title").data("baseurl");
    let usuario = $("#txt-l-usuario").val();
    let clave = $("#txt-l-clave").val();

    let valida = false;
    let mensajeError = "No funciona, estoy en proceso de desarrollo...<br>";
    quitarCantidadDeErrores("msg-verificacion");
    agregarMensajeDeError("msg-verificacion", mensajeError);
    //Acá van validacione que cambien el "valida" a true

    if (valida) {
        $.ajax({
            url: baseUrl + 'Login/validarUsuario',
            type: 'POST',
            dataType: 'json',
            data: {
                usuario: usuario,
                clave: clave
            },
            async: true
        })
            .done(function (result) {
                cambiarIcon(result.icon, result.color);
                mensaje(result.mensaje);
                if (result.ok) {
                    cargando("mensaje");
                    window.setTimeout(function () {
                        location.href = baseUrl + 'home';
                    }, 3000);
                }
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.error('error en iniciarSeccion : ' + textStatus + ' ' + errorThrown);
            })
    } else {
        //enviar mensaje
        cambiarCaritaA(":(", "volteada", "amarilla");
        mensaje(obtenerMensajesDeError("msg-verificacion"));
    }
}



/* MENSAJES Y CARITAS */
$(document).on('mouseenter', '#btn-seccion-recuperar-clave', function () {
    cambiarCaritaA(":|", "volteada", "amarilla");
    mensaje("¿Olvidó su contraseña?");
});
$(document).on('mouseleave', '#btn-seccion-recuperar-clave', function () {
    cambiarCaritaA(":)", "volteada", "verde");
    mensajePorDefecto();
});

function cambiarCaritaA(carita, orientacion, color = "verde") {
    //Quitar color, disposición de ícono e ícono
    let circle = $(".circulo");
    circle.css("padding-top", "0px");
    circle.removeClass("fas fa-check fa-exclamation fa-times");

    switch (color) {
        case "verde":
            circle.css("background", "#42C474");
            break;
        case "amarilla":
            circle.css("background", "#C48B42");
            break;
        case "roja":
            circle.css("background", "#C44242");
            break;
    }

    //Agregar carita
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

function cambiarIcon(icon, color) {
    //Quitar carita
    $("#carita").text("");
    //Acomodar dispocisión para ícono
    let circle = $(".circulo");
    circle.css("background", color);
    circle.css("display", "block");
    circle.css("padding-top", "5px");
    //Agregar ícono
    circle.addClass(icon);
}

function mensajePorDefecto() {
    $("#mensaje").text("Bienvenido, visitante");
}
function mensaje(texto) {
    $("#mensaje").html(texto);
}
function cargando(id) {
    $(`#${id}`).addClass("loading");
}