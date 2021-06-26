function agregarMensajeDeError(idInputHidden, error) {
    let mensaje = $.trim($(`#${idInputHidden}`).val());
    mensaje += error;
    $(`#${idInputHidden}`).val(mensaje);
}

function obtenerMensajesDeError(idInputHidden) {
    return $(`#${idInputHidden}`).val();
}

function agregarErrorAContador(idInputHidden) {
    let cantErrores = parseInt($(`#${idInputHidden}`).data("errores"));
    cantErrores += 1;
    $(`#${idInputHidden}`).data("errores", cantErrores);
}

function obtenerCantidadDeErrores() {
    return parseInt($(`#${idInputHidden}`).data("errores"));
}

function quitarCantidadDeErrores(idInputHidden) {
    $(`#${idInputHidden}`).data("errores", 0);
    $(`#${idInputHidden}`).val("");
}

function quitarBRPor1SoloError(mensaje) {
    return mensaje.split('<br>')[0];
}