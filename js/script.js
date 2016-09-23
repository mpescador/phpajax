function getData(listaEmpleados) {
    $.ajax({
        type: "POST",
        url: "./php/json.php",
        dataType: 'json',
        data: {
            listaEmpleados: listaEmpleados
        },
        success: succesGetData,
        error: errorGetData
    });
}

function succesGetData(data) {
    var obj = jQuery.parseJSON(data);

    $(".clean").remove();
    $("#listadoEmpleados").append(
        "<tr class='clean'><td align='center'><b>Nombre</b></td><td align='center'><b>Apellidos</b></td></tr>");

    for (var i = 0; i < obj.empleados.length; i++) {

        $("#listadoEmpleados").append(
            "<tr class='clean'><td align='center'>" +
            obj.empleados[i].nombre +
            "</td>" +
            "<td align='center'>" +
            obj.empleados[i].apellidos +
            "</td></tr>");
    }
}

function errorGetData(data) {
    alert("Se ha producido un error al obtener los datos");
}