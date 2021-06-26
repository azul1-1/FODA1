function bloquearContenedor(id){
    $(`#${id}`).find('input, select, textArea').each(function () {
        $(this).prop('disabled', true);
    });
}

function bloquearContenedoresPorClase(clase){
    $(`.${clase}`).find('input, select, textArea').each(function () {
        $(this).prop('disabled', true);
    });
}

function bloquearContenedoresPorNombre(nombre){
    $(`[name='${nombre}']`).find('input, select, textArea').each(function () {
        $(this).prop('disabled', true);
    });
}

function bloquearInputsPorId(cadenaDeIds){
    let arrayIds = cadenaDeIds.split(',');
    let id;
    arrayIds.forEach(element => {
        id = element.trim();
        $(`#${id}`).prop('disabled', true);
    });
}

function bloquearInputsPorClases(cadenaDeClases){
    let arrayClases = cadenaDeClases.split(',');
    let clase;
    arrayClases.forEach(element => {
        clase = element.trim();
        $(`.${clase}`).prop('disabled', true);
    });
}

function bloquearInputsPorNombres(cadenaDeNombres){
    let arrayNombres = cadenaDeNombres.split(',');
    let nombre;
    arrayNombres.forEach(element => {
        nombre = element.trim();
        $(`[name='${nombre}']`).prop('disabled', true);
    });
}

/* ------------------------------------ */

function desbloquearContenedor(id){
    $(`#${id}`).find('input, select, textArea').each(function () {
        $(this).prop('disabled', false);
    });
}

function desbloquearContenedoresPorClase(clase){
    $(`.${clase}`).find('input, select, textArea').each(function () {
        $(this).prop('disabled', false);
    });
}

function desbloquearContenedoresPorNombre(nombre){
    $(`[name='${nombre}']`).find('input, select, textArea').each(function () {
        $(this).prop('disabled', false);
    });
}

function desbloquearInputsPorId(cadenaDeIds){
    let arrayIds = cadenaDeIds.split(',');
    let id;
    arrayIds.forEach(element => {
        id = element.trim();
        $(`#${id}`).prop('disabled', false);
    });
}

function desbloquearInputsPorClases(cadenaDeClases){
    let arrayClases = cadenaDeClases.split(',');
    let clase;
    arrayClases.forEach(element => {
        clase = element.trim();
        $(`.${clase}`).prop('disabled', false);
    });
}

function desbloquearInputsPorNombres(cadenaDeNombres){
    let arrayNombres = cadenaDeNombres.split(',');
    let nombre;
    arrayNombres.forEach(element => {
        nombre = element.trim();
        $(`[name='${nombre}']`).prop('disabled', false);
    });
}