/* NÚMEROS */
function esNumero(strNumber) {
    if (strNumber == null) return false;
    if (strNumber == undefined) return false;
    if (typeof strNumber === "number" && !isNaN(strNumber)) return true;
    if (strNumber == "") return false;
    if (strNumber === "") return false;
    var psInt, psFloat;
    psInt = parseInt(strNumber);
    psFloat = parseFloat(strNumber);
    return !isNaN(strNumber) && !isNaN(psFloat);
}

function esInt(numero) {
    if (esNumero(numero) && numero % 1 == 0) return true;
    else return false;
}


/* FECHAS */
function obtenerDiasDeMes(numMes, ano) {
    let cantDias;
    numMes = parseInt(numMes);
    ano = parseInt(ano);
    switch (numMes) {
        case 1: //Enero
        case 3: //Marzo
        case 5: //Mayo
        case 7: //Julio
        case 8: //Agosto
        case 10: //Octubre
        case 12: //Diciembre
            cantDias = 31;
            break;
        case 4: //Abril
        case 6: //Junio
        case 9: //Septiembre
        case 11: //Noviembre
            cantDias = 30;
            break;
        case 2: //Febrero
            if (esAnioBisiesto(ano) == 1) {
                cantDias = 29;
            } else {
                cantDias = 28;
            }
            break;
    }
    return cantDias;
}

function esAnioBisiesto(ano) {
    return (((ano % 4 == 0) && (ano % 100 != 0)) || (ano % 400 == 0))
}