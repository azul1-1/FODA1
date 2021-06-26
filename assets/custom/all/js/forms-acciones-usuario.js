function limpiarFormulario(id, presionandoCheckboxs = false, valorRadioButtonsPorDefecto = 0) {
    limpiarImputsDeContenedor(id, presionandoCheckboxs, valorRadioButtonsPorDefecto);
}

function limpiarImputsDeContenedor(id, presionandoCheckboxs = false, valorRadioButtonsPorDefecto = 0) {
    $(`#${id} input`).prop("value", "");
    $(`#${id} select option:first-child`).prop("selected", "selected");
    $(`#${id} input[type=radio]`).prop("checked", false);

    valorRadioButtonsPorDefecto = valorRadioButtonsPorDefecto.split("valor de radiobuttons por defecto:")[1].trim(); //permite colocarle esa descripción al parámetro concatenada al valor
    $(`#${id} input[type=radio]`).val(valorRadioButtonsPorDefecto);

    if (presionandoCheckboxs === true || presionandoCheckboxs === "presionando checkboxs") {
        $(`#${id} input[type=checkbox]`).each(function () {
            if (this.checked) {
                this.click();
            }
        });
    } else if (presionandoCheckboxs === false || presionandoCheckboxs === "sin presionar checkboxs") {
        $(`#${id} input[type=checkbox]`).prop("checked", false);
    }
}

//No está funcionando todavía
function cambiarFocoConEnter(cadenaDeIds) {
    let arrayDeIds = cadenaDeIds.split(',');
    let id;
    arrayDeIds.forEach(element => {
        id = element.trim();
        $(`#${id}`).on('keypress', function (e) {
            if (e.which == 13) {
                $('#pass_user').focus();
            }
        });
    });
}