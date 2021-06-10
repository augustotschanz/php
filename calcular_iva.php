<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $iva = 0;
    $resPrecioSinIva = 0;
    $resPrecioConIva = 0;
    $resIvaCantidad = 0;
    
    if($_POST){
        $iva = $_REQUEST["txtIva"];
        $precioSinIva = $_REQUEST["txtImporteSinIva"];
        $precioConIva = $_REQUEST["txtImporteConIva"];
        
        function resConIva($precioConIva, $precioSinIva){
            if($precioConIva > 0 && $precioSinIva == ""){
                $resPrecioSinIva = $precioConIva / ($iva/100+1);
                $resPrecioConIva = $precioConIva;
                $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
            }
        }

        function resSinIva($precioConIva, $precioSinIva){
            if($precioConIva > 0 && $precioSinIva == ""){
            $resPrecioSinIva = $precioConIva / ($iva/100+1);
            $resPrecioConIva = $precioConIva;
            $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
            }
        }
    }
    
    /*
    if($_POST){
        $iva = $_REQUEST["txtIva"];
        $precioSinIva = $_REQUEST["txtImporteSinIva"];
        $precioConIva = $_REQUEST["txtImporteConIva"];

        if($precioSinIva > 0 && $precioConIva == ""){
        $resPrecioConIva  = $precioSinIva * ($iva/100+1);
        $resPrecioSinIva = $precioSinIva;
        $resIvaCantidad =  $resPrecioConIva - $resPrecioSinIva;
        }

        if($precioConIva > 0 && $precioSinIva == ""){
            $resPrecioSinIva = $precioConIva / ($iva/100+1);
            $resPrecioConIva = $precioConIva;
            $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
        }
    }
    */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calcular IVA</title>
</head>
<body>
    <main>
        <div class="container">
        <div class="row">
            <div class="my-4 text-center">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
            <div class="row">
                <div class="col-6">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-12 py-1">
                                <h4>IVA:</h4>
                            </div>
                            <div class="col-2 py-1">   
                                <input type="number" value="21" id="txtIva" name="txtIva">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <h4>Precio sin IVA:</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">   
                                <input type="number" id="txtImporteSinIva" name="txtImporteSinIva">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <h4>Precio con IVA:</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">   
                                <input type="number" id="txtImporteConIva" name="txtImporteConIva">
                            </div>
                        </div>
                        <div class="row">
                            <div class="py-5">
                                <button type="submit" class="btn btn-primary">Calcular</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-6">
                    <table class="table table-hover border">
                        <tbody>
                            <tr>
                                <td>IVA:</td>
                                <td><?php echo $iva; ?></td>
                            </tr>
                            <tr>
                                <td>Precio sin IVA:</td>
                                <td><?php echo ; ?></td>
                            </tr>
                            <tr>
                                <td>Precio con IVA:</td>
                                <td><?php echo resConIva(); ?></td>
                            </tr>
                            <tr>
                                <td>IVA cantidad:</td>
                                <td><?php echo $resIvaCantidad ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>