<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function

    public function setDni($dni){ $this->dni = $dni;}
    public function getDni(){ return $this->dni;}

    public function setNombre($nombre){ $this->nombre = $nombre;}
    public function getNombre(){ return $this->nombre;}

    public function setEdad($edad){ $this->edad = $edad;}
    public function getEdad(){ return $this->edad;}

    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad;}
    public function getNacionalidad(){ return $this->nacionalidad;}

    public function imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        
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
        /*echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Legajo: " . $this->legajo . "<br>";
        echo "Promedio: " . $this->calcularPromedio() . "<br>";*/
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Edad: " . $this->edad . "<br>"; 
    }

    public function calcularPromedio(){
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto)/3 . "<br>";
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

}

class Docente extends Persona{
    public $especialidad;
    const ESPECILIADAD_WP = "Wordpress";
    const ESPECILIADAD_ECO = "Economía aplicada";
    const ESPECILIADAD_BBDD = "Base de datos";


    public function imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br>";
    }

    public function imprimirEspecialidadesHabilitadas(){

    }
    
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

}

// Programa

$alumno1 = new Alumno();
$alumno1->setDni("35528499");
$alumno1->setNombre("Juan");
$alumno1->setEdad(28);
echo "El alumno " . $alumno1->getNombre() . " tiene " . $alumno1->getEdad() . " años." . "<br>";
$alumno1->imprimir();

/*
$alumno2 = new Alumno();
$alumno2->nombre="Micaela Ledesma";
$alumno2->legajo = 801;
$alumno2->notaPortfolio = 9;
$alumno2->notaPhp = 8;
$alumno2->notaProyecto = 9;

$alumno1->imprimir();
$alumno2->imprimir();


$docente = new Docente();
$docente->nombre = "miguel Paz";
$docente->dni="89273647";
$docente->especialidad=Docente::ESPECILIADAD_BBDD;
$docente->imprimir();*/

?>