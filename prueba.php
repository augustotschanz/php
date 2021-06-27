<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

$bruto1 = 50000;

function calcularNeto(){
    return $bruto2 - $bruto2 * 0.17;
}

echo (calcularNeto(800));

?>