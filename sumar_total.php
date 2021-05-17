<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Lista de precios</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                
                    <table class="table table-hover border">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Acción</th>
                            </tr>
                <?php 
                $contador = 0;
                while ($contador<3) {
                ?>
                            <tr>
                                <td><?php echo $aProductos[$contador]["nombre"]?></td>
                                <td><?php echo $aProductos[$contador]["marca"]?></td>
                                <td><?php echo $aProductos[$contador]["modelo"]?></td>
                                <td><?php echo $aProductos[$contador]["stock"]==0? "Sin stock" : ($aProductos[$contador]["stock"]<=10? "Poco Stock" : "Hay stock");?></td>
                                <td><?php echo $aProductos[$contador]["precio"]?></td>
                                <td><button class="btn btn-primary">Comprar</button></td>
                            </tr>

                <?php
                $contador++;
                } 
                ?>
                        </tbody>
                </table> 
                <div>
                    <h2>El subtotal es: $ 
                    <?php 

                        $subtotal = 0;

                        for($i=0; $i<count($aProductos); $i++){
                            $subtotal +=$aProductos[$i]["precio"];
                            
                        };
                        echo ($subtotal);
                        // echo ($aProductos[0]["precio"] + $aProductos[1]["precio"] + $aProductos[2]["precio"]);

                        /*for($i=0; $i<3; $i++){
                        echo ($aProductos[$i]["precio"]);
                        
                        }; */
                    ?>
                    </h2>
                </div>
            </div>
        </div>
    </main>
</body>
</html>



