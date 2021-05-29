<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
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

    $sueldoBruto = $aEmpleados["bruto"];

    function calcularNeto($bruto){
    $neto = $bruto - ($bruto * 0.17);
    return $neto; 
    
    }
    echo calcularNeto($sueldoBruto);
?>