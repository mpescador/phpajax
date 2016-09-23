<?

  $empleadosAdministracion = '{
    "empleados":[{
            "nombre":"Ana",
            "apellidos":"Pastor"
        },
        {
            "nombre":"Luis",
            "apellidos":"Pérez"
        },
        {
            "nombre":"José",
            "apellidos":"Rodriguez"
        },
        {
            "nombre":"Sonia",
            "apellidos":"García"
        },
        {
            "nombre":"Gabriel",
            "apellidos":"López"
        },
        {
            "nombre":"Begoña",
            "apellidos":"González"
        },
        {
            "nombre":"Ramón",
            "apellidos":"Iglesias"
        }
    ]
}';

 $empleadosAlmacen = '{
    "empleados":[{
            "nombre":"Eva",
            "apellidos":"Ramírez"
        },
        {
            "nombre":"José Luis",
            "apellidos":"Rodriguez"
        },
        {
            "nombre":"Pedro",
            "apellidos":"Pestano"
        },
        {
            "nombre":"Ana",
            "apellidos":"Iglesias"
        },
        {
            "nombre":"Rubén",
            "apellidos":"García"
        },
        {
            "nombre":"Rosa",
            "apellidos":"López"
        },
        {
            "nombre":"Francisco",
            "apellidos":"Estévez"
        }
    ]
}';

$listaEmpleados=$_POST['listaEmpleados'];

if ($listaEmpleados=='0') $empleados=json_encode($empleadosAdministracion);
else $empleados=json_encode($empleadosAlmacen);

echo $empleados;

?>