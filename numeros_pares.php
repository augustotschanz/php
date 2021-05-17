<?php 
// Imprimir un listado de numeros consecutivos del 1 al 100 

/* for ($i=0; $i<=100; $i++){
    print_r("$i <br>");
} */

// Luego sobre el mismo listado modificarlo para que sólo muestre numeros pares

/* for ($i=0; $i<=100; $i+=2){
    print_r("$i <br>");
} */

// Cuando el numero llegue a 60 mostrarlos 

for ($i=0; $i<=100; $i+=2){
    print_r("$i <br>");
    if($i==60){
        break;
    }
}

?>