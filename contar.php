<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

$aEmpleados = array();

$aEmpleados[] = array(
    "dni" => "35.236.789",
    "nombre" => "Ana Acuña",
    "edad" => 50,
    "peso" => 60,
);

$aEmpleados[] = array(
    "dni" => "23.456.789",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 65,
    "peso" => 70,
);

$aEmpleados[] = array(
    "dni" => "26.159.789",
    "nombre" => "Juan Irraola",
    "edad" => 45,
    "peso" => 100,
);

$aEmpleados[] = array(
    "dni" => "12.345.678",
    "nombre" => "Beatriz Ocampo",
    "edad" => 48,
    "peso" => 63,

    function contar($miArray){

        $cantidad = 0;
        foreach($miArray as $item){
            $cantidad++;
        }

        return $cantidad;
    }

    echo "La cantidad de empleados es: ".contar($aEmpleados);
?>