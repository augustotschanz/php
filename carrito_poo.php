<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

class Cliente{
    public $dni;
    public $nombre;
    public $telefono;
    public $descuento;

    public function imprimir(){

    }

    public function __construct() {
        $this->descuento = 0.0;

    }
}

class Producto{
    public $cod;
    public $nombre;
    public $precio;
    public $descripcion;
    public $iva;

    public function imprimir(){
    }

    public function __construct() {
        $this->precio = 0.0;
        $this->iva = 0.0;
    }
}

class Carrito{
    public $cliente;
    public $aProductos;
    public $subtotal;
    public $descripcion;
    public $iva;

    public function imprimir(){
    }
    public function cargarProducto(){
    }

    public function __construct() {
        $this->aProductos = array();
        $this->subtotal = 0.0;
        $this->total = 0.0;
    }
}


?>