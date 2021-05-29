<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();

$aPacientes[] = array(
    "dni" => "35.236.789",
    "nombre" => "Ana Acuña",
    "edad" => 50,
    "peso" => 60,
);

$aPacientes[] = array(
    "dni" => "23.456.789",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 65,
    "peso" => 70,
);

$aPacientes[] = array(
    "dni" => "26.159.789",
    "nombre" => "Juan Irraola",
    "edad" => 45,
    "peso" => 100,
);

$aPacientes[] = array(
    "dni" => "12.345.678",
    "nombre" => "Beatriz Ocampo",
    "edad" => 48,
    "peso" => 63,
);

$aPacientes[] = array(
    "dni" => "35.489.753",
    "nombre" => "Victor Marquez",
    "edad" => 33,
    "peso" => 78,
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Lista de pacientes</title>
</head>
<body>
    <h1 class="py-3 text-center">Listado de pacientes:</h1>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tbody>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y Apellido</th>
                            <th>Edad</th>
                            <th>Peso(kg)</th>
                        </tr>
                            <?php 
                            foreach ($aPacientes as $paciente){
                            ?>
                        <tr>
                            <td><?php echo $paciente["dni"]?></td>
                            <td><?php echo $paciente["nombre"]?></td>
                            <td><?php echo $paciente["edad"]?></td>
                            <td><?php echo $paciente["peso"]?></td>
                        </tr>
                            <?php 
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>