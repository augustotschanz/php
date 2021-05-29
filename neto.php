<?php
    /* Dado un sueldo bruto de $50.000 bruto, restar el 17% correspondiente a cargas sociales y mostrar en pantalla el sueldo
    neto, a traves de una función. $neto = $bruto - ($bruto*0.17); */

    $sueldoBruto = 50000;

    function calcularNeto($bruto){
        $neto = $bruto - ($bruto * 0.17);
        return $neto;
    }

    echo "El sueldo neto es $".calcularNeto($sueldoBruto)." de un bruto de $$sueldoBruto";


?>