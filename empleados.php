<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    /* Dada una lista de empleados, mostrar cada uno de ellos con su sueldo neto en un tabla html
    con una precision de dos decimales y los nombres en mayúsculas

    Pasos:
    1- Maquetar la pagina en html con boostrap
    2- Recorrer una lista de empleados mostrando DNI, Nombre, Sueldo bruto (utilizar un solo bucle)
    3- Ahora reemplazar el sueldo bruto por la función calcularNeto de la actividad anterior y que
    reciba como parámetro el bruto
    4- El importe mostrarlo con precisión de dos decimales y el nombre del empleados en mayúscula
    (investigar en google una función para convertir un string en mayúscula) */

    $aEmpleados=array();

    $aEmpleados[] = array(
        "dni"=> 33300123,
        "nombre" => "David García",
        "bruto" => 85000.30
        );
    $aEmpleados[] = array(
        "dni"=> 40874456,
        "nombre" => "Ana del Valle",
        "bruto" => 90000
    );
    $aEmpleados[] = array(
        "dni"=> 67567565,
        "nombre" => "Andrés Perez",
        "bruto" => 100000
    );
    $aEmpleados[] = array(
        "dni"=> 75744545,
        "nombre" => "Victoria Luz",
        "bruto" => 70000
    );
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Empleados</title>
</head>
<body>
    <h1 class="text-center py-3">Listado de empleados</h1>
    <div class="container">
        <table class="table table-hover border">
            <tbody>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Sueldo bruto($)</th>
                    <th>Sueldo neto($)</th>
                </tr>
                <?php foreach ($aEmpleados as $empleado) {?>

                <tr>
                    <td><?php echo $empleado["dni"]; ?></td>
                    <td><?php echo $empleado["nombre"]; ?></td>
                    <td><?php echo $empleado["bruto"]; ?></td>
                <?php }?>
                
                <?php function calcularNeto($bruto){
                    $neto = $bruto - ($bruto * 0.17);
                    return $neto; ?>
                    <td><?php echo calcularNeto($aEmpleados["bruto"]); ?></td>
                    <?php}?>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>