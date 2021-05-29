<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular área</title>
</head>
<body>
    <h1>Calcular área</h1>
    <?php

    function calcAreaRect($base, $altura){
        $resultado = $base * $altura;
        return $resultado;

    }

    echo "El área es ".calcAreaRect(100,0.60)." cm2"."<br>";
    echo "El área es ".calcAreaRect(800,300)." cm2";

?>
</body>
</html>
