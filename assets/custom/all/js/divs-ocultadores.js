function ocultarContenedor(id){
    $(`#${id}`).css('display', 'none');
}

function ocultarElementosPorIds(cadenaDeIds){
    let arrayIds = cadenaDeIds.split(',');
    let id;
    arrayIds.forEach(element => {
        id = element.trim();
        $(`#${id}`).css('display', 'none');
    });
}

function ocultarElementosPorClases(cadenaDeClases){
    let arrayClases = cadenaDeClases.split(',');
    let clase;
    arrayClases.forEach(element => {
        clase = element.trim();
        $(`.${clase}`).css('display', 'none');
    });
}

function ocultarElementosPorNombres(cadenaDeNombres){
    let arrayNombres = cadenaDeNombres.split(',');
    let nombre;
    arrayNombres.forEach(element => {
        nombre = element.trim();
        $(`[name='${nombre}']`).css('display', 'none');
    });
}

function ocultarElementosPorEtiquetas(cadenaDeEtiquetas){
    let arrayEtiquetas = cadenaDeEtiquetas.split(',');
    let etiqueta;
    arrayEtiquetas.forEach(element => {
        etiqueta = element.trim();
        $(`${etiqueta}`).css('display', 'none');
    });
}

/* ------------------------------------ */

function mostrarContenedor(id){
    $(`#${id}`).css('display', 'block');
}

function mostrarElementosPorIds(cadenaDeIds){
    let arrayIds = cadenaDeIds.split(',');
    let id;
    arrayIds.forEach(element => {
        id = element.trim();
        $(`#${id}`).css('display', 'block');
    });
}

function mostrarElementosPorClases(cadenaDeClases){
    let arrayClases = cadenaDeClases.split(',');
    let clase;
    arrayClases.forEach(element => {
        clase = element.trim();
        $(`.${clase}`).css('display', 'block');
    });
}

function mostrarElementosPorNombres(cadenaDeNombres){
    let arrayNombres = cadenaDeNombres.split(',');
    let nombre;
    arrayNombres.forEach(element => {
        nombre = element.trim();
        $(`[name='${nombre}']`).css('display', 'block');
    });
}

function mostrarElementosPorEtiquetas(cadenaDeEtiquetas){
    let arrayEtiquetas = cadenaDeEtiquetas.split(',');
    let etiqueta;
    arrayEtiquetas.forEach(element => {
        etiqueta = element.trim();
        $(`${etiqueta}`).css('display', 'block');
    });
}
