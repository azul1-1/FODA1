/* VERIFICAR DATOS DE INPUTS */
function verificarInputTextVacio(idInput) {
    let input = $.trim($(`#${idInput}`).val());
    if (input.length != 0) return true;
    else return false;
}

function verificarNombreRealDePersona(idInput) {
    let nombre_o_apellido = $.trim($(`#${idInput}`).val());
    //Evita ingresar números y caracteres raros en un nombre o apellido
    return /^[\xD1\xF1A-Za-z _\xE1\xE9\xED\xf3\xFA\s]*[\xD1\xF1A-Za-z\xE1\xC1\xE9\xC9\xED\xCD\xf3\xD3\xDA\xFA \s][\xD1\xF1A-Za-z _\xE1\xE9\xED\xf3\xFA\s]*$/.test(nombre_o_apellido);
}

function verificarPassword(idInput, largoMin = 1, largoMax = null) {
    let contrasenna = $.trim($(`#${idInput}`).val());
    let largoMinimo = parseInt(largoMin);
    let largoMaximo = parseInt(largoMax);
    if (contrasenna.length >= largoMinimo && contrasenna.length <= largoMaximo) {
        return true;
    }
    return false;
}

function verificarRePass(idInputPass, idInputRePass) {
    let clave = $.trim($(`#${idInputPass}`).val());
    let claveRepetida = $.trim($(`#${idInputRePass}`).val());
    if (clave === claveRepetida) return true;
    else return false;
}

function verificarEmail(idInput) {
    let email = $.trim($(`#${idInput}`).val());
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
