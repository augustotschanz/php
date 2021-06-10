<?php 
    if($_POST){
        $usuario = $_REQUEST["txtUsuario"];
        $contraseña = $_REQUEST["txtPass"];

        if($usuario != "" & $contraseña != ""){
            header("Location: acceso-confirmado.php");
        }else{
            $mensaje = "Sólo para usuarios registrados!";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <?php if(isset($mensaje) && $mensaje != ""){
                    echo '<div class="alert alert-danger" role="alert">' . $mensaje . "</div>"}
                ?>
                <form action="" method="POST" class="col-3 py-4">
                    <h4>Usuario:</h4>
                    <div class="row py-2">
                        <label for=""><input type="text" id="txtUsuario" name="txtUsuario" class="form-control"></label>
                    </div>
                    <h4>Contraseña:</h4>
                    <div class="row py-2">
                        <label for="Contraseña"><input id="txtPass" name="txtPass" type="password" class="form-control"></label>
                    </div>
                    <div class="row py-2">
                        <button type="submit" class="btn btn-primary col-5">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>