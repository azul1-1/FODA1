function marcarInputInvalidoPorId(id) {

    if ($(`#${id}`).attr('type') === "radio") {
        $(`#${id}`).parent("form").addClass('was-validated');
        $(`#${id}`).parent("div").addClass('text-danger');
        $(`#${id}`).addClass('custom-control-input');
    }
    if ($(`#${id}`).attr('type') === "checkbox") {
        $(`#${id}`).parent("div").addClass('custom-control custom-checkbox');
        $(`#${id}`).addClass('custom-control-input');
    }

    if (!$(`#${id}`).prop("disabled")) {
        $(`#${id}`).removeClass('is-valid');
        $(`#${id}`).addClass('is-invalid');
    } else {
        console.error("El método 'marcarInputInvalidoPorId()' no funciona en inputs deshabilitados.");
    }
}

function marcarInputValidoPorId(id) {
    if (!$(`#${id}`).prop("disabled")) {
        $(`#${id}`).removeClass('is-invalid');
        $(`#${id}`).addClass('is-valid');
    } else {
        console.error("El método 'marcarInputValidoPorId()' no funciona en inputs deshabilitados.");
    }
}

function marcarInputInvalidoPorNombre(nombre) {
    if (!$(`[name='${nombre}']`).prop("disabled")) {
        $(`[name='${nombre}']`).removeClass('is-valid');
        $(`[name='${nombre}']`).addClass('is-invalid');
    } else {
        console.error("El método 'marcarInputInvalidoPorNombre()' no funciona en inputs deshabilitados.");
    }
}

function marcarInputValidoPorNombre(nombre) {
    if (!$(`[name='${nombre}']`).prop("disabled")) {
        $(`[name='${nombre}']`).removeClass('is-invalid');
        $(`[name='${nombre}']`).addClass('is-valid');
    } else {
        console.error("El método 'marcarInputValidoPorNombre()' no funciona en inputs deshabilitados.");
    }
}
