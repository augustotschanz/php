<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);
date_default_timezone_set("America/Argentina/Buenos_Aires");


class Cliente{
    private $dni;
    private $nombre;
    private $telefono;
    private $descuento;

    public function imprimir(){
        echo "Dni: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Telefono: " . $this->telefono . "<br>";
        echo "Descuento: " . $this->descuento . "<br>"; 
    }

    public function __construct() {
        $this->descuento = 0.0;

    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

}

class Producto{
    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;

    public function imprimir(){
        echo "Código: " . $this->cod . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Iva: " . $this->iva . "<br>"; 
    }

    public function __construct() {
        $this->precio = 0.0;
        $this->iva = 0.0;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

}

class Carrito{
    private $cliente;
    private $aProductos;
    private $subTotal;
    private $total;

    public function __construct(){
        $this->aProductos = array();
        $this->subTotal = 0.0;
        $this->subTotalIva = 0.0;
        $this->total = 0.0;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function cargarProducto($producto){
        $this->aProductos[] = $producto;
    }

    public function imprimirTicket(){
        
        echo 
            "<table class='table table-hover border' style='width:500px'>";

            echo 
                "<tr>
                    <th colspan='2' class='text-center'>ECO MARKET</th>
                </tr>

                <tr>
                    <th>Fecha:</th>
                    <td>".date("d/m/Y H:i:s")."</td>
                </tr>

                <tr>
                    <th>DNI:</th>
                    <td>".$this->cliente->dni."</td>
                </tr>

                <tr>
                    <th>Nombre:</th>
                    <td>".$this->cliente->nombre."</td>
                </tr>

                <tr>
                    <th colspan='3'>Productos:</th>
                </tr>";

                    // COMIENZA FOR EACH
                    foreach ($this->aProductos as $producto) {
                    echo 
                    "<tr>
                        <td>".$producto->nombre."</td>
                        <td>$ ".number_format($producto->precio, 2, ",", ".")."</td>
                    </tr>";

                    $this->subTotal += $producto->precio;
                    $this->total += $producto->$precio * (($producto->iva / 100)+1);

                    }

                    
            echo 
                "<tr style = 'height:15px'>
                    <th> </th>
                    <td> </td>
                </tr>
                <tr>
                    <th>Subtotal sin IVA:</th>
                    <td>$ ".number_format($this->subTotal, 2, ",", ".")."</td>
                </tr>
                <tr>
                    <th>TOTAL:</th>
                    <td>$ ".number_format($this->total, 2, ",", ".")."</td>
                </tr>
            </table>";
    }

}

//Programa
$cliente1 = new Cliente();
$cliente1->dni = "34765456";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@gmail.com";
$cliente1->telefono = "+54 11 8859-8686";
$cliente1->descuento = 0.05;
//$cliente1->imprimir();
//print_r($cliente1);

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
//$producto1->imprimir();
//print_r($producto1);

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "Esta es una heladera no froze";
$producto2->precio = 76000;
$producto2->iva = 10.5;

$carrito = new Carrito();
$carrito->cliente = $cliente1;
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
//$carrito->imprimir(); //Imprime el ticket de la compra
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>ECO-MARKET</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <?php $carrito->imprimirTicket(); ?>
            </div>
        </div>
    </div>
</body>
</html>