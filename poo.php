<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function imprimir(){

    }

}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct() {
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Legajo: " . $this->legajo . "<br>";
        echo "Promedio: " . $this->calcularPromedio() . "<br>"; 
    }

    public function calcularPromedio(){
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto)/3 . "<br>";
    }
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir(){

    }

    public function imprimirEspecialidadesHabilitadas(){

    }
}

// Programa

$alumno1 = new Alumno();
$alumno1->nombre="Juan Perez";
$alumno1->legajo = 800;
$alumno1->notaPortfolio = 8;
$alumno1->notaPhp = 9;
$alumno1->notaProyecto = 8.50;


$alumno2 = new Alumno();
$alumno2->nombre="Micaela Ledesma";
$alumno2->legajo = 801;
$alumno2->notaPortfolio = 9;
$alumno2->notaPhp = 8;
$alumno2->notaProyecto = 9;

$alumno1->imprimir();
$alumno2->imprimir();

?>