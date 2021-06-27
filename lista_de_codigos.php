<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

///////////////// OPERADOR TERNARIO ////////////////
/* condicion ? true : false;
$edad = 25;
echo $edad >= 18? "Es mayor de edad" : "Es menor de edad";

pregunta ? verdadera : (pregunta? verdadera : falsa);

// Convierte un string de fecha
/* $fecha = "2020-06-18";
echo date_format(date_create($fecha), 'd/m/Y');*/

// Inclusión de archivos
/* include_once("header.php");
include_once("footer.php"); */

////////////////// Redirect ////////////////
// header("Location: https://google.com.ar");

// fopen
/* $archivo1 = fopen($filename, $mode);
Modos: 
- r: Abre archivo en modo lectura
- r+: Abre archivo para leer y escribir
- w: Permite escribir y no leer
- w+: Permite escribir o leer un archivo, si no existe lo crea
- a: Agregar un archivo
- a+: Agrega al final, si no existe crea el archivo 

ejemplo: 
$archivo1 = fopen("datos.txt", 'a'); Abre el archivo en modo append
$archivo2 = fopen("datos_personales.txt", 'a');

fwrite($archivo1, '1');
fwrite($archivo1, '23');
fclose($archivo1);
fclose($archivo2);

Cotenido de datos.txt es "123" */

// file_get_content : equivale a fopen, fread, fclose
/* $contenido = file_get_content("datos.txt");
echo $contenido;

Para agregar archivos:
$persona = "Juan Perez";
file_put_content("archivo.txt", $persona);

// file_exists: comprueba si existe un archivo

if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK)  { //Se compara con esto para indicar que no hubo errores
        $nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000); // Le doy un nombre aleatorio con la fecha y un numero random
        $archivo_tmp = $_FILES["archivo"]["tmp_name"]; // Le damos el nombre dentro del sistema operativo
        $nombreArchivo = $_FILES["archivo"]["name"]; // Nombre del archivo
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION); // Le agregamos la extension 
        $nuevoNombre = "$nombreAleatorio.$extension"; // Une el nombre aleatorio con la extensión
        move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre"); // Sube el archivo con el 
    }

    unlink("files/miimagen.png"); // Elimina un archivo

    ///////////////// JSON //////////////////

    $jsonPersona = json_encode($aPersonas); // Agrupa en array JSON
    $aPersonas = json_decorde($jsonPersona, true); //Decodifica el array haciendolo individual

    Validación de datos:
    strpos()= Busca la posicion donde comienza la palabra 
    strstr()= Busca una palabra dentro de una cadena de caracteres
    strlen()= Cantidad de caracteres
    str_replace()= Reemplaza una palabra por otra en una cadena de caracteres
    filter_var()= verifica si la variable cumple una regla específica
    isset() = Verifica si está definida la variable
    count()= Cuenta la cantidad de elementos o caracteres
    trim($cadena) = Trunca espacios laterales
    is_array()= Si la variable es un array
    is_null()= Si el valor de la variable es null

*/

/* $_COOKIE: informacion que envia el servidor web al cliente (navegador) con informacion que necesita quedar
    guardada en la pc de cada usuario. ES UNA VARIABLE GLOBAL Y DE SOLO LECTURA SIENDO UN ARRAY ASOCIATIVO QUE
    NOS PERMITE ACCEDER A INFORMACION GUARDADA PREVIAMENTE. 

    Ejemplo: 
    $expira = time() + 3600;     // Opcional para agregar tiempo de expiracion. Equivale a una hora
    setcookie("usuario", "Juanita", $expira);
    echo 'Hola ' . $_COOKIE["usuario"] . '!'; => La cookie debió estar definida previamente

    Para preguntar si existe una cookie:
    if(isset($_COOKIE["usuario"]){
        echo "Bienvenido " . $_COOKIE["usuario"];
    }else{
        echo "Usuario no registrado";
    }

    $_SESSION: forma de guardar informacion en un espacio de la memoria ubicado del lado del servidor.
    Variable global guardada del lado del servidor.
    session_start(); => Inicia sesión. Debe ir en la parte superior
    
    $_SESSION["usuario"] = "admin"; => Acceder a datos de la sesion
    $_SESSION["nombre"] = "Ana Valle"; => Acceder a datos de la sesion

    unset($_SESSION["usuario"]); => Elimina una variable de sesión
    session_destroy(); => Elimina todas las variables de sesión
    
    //////////// TIPOS DE DATOS DE RETORNO //////////////////

    Tipos: int, float, bool, string, interfaces y clases, array, con "?" admite que devuelva null
   
    EJEMPLOS: 

    function calcularNeto(float $bruto) : float{
        return $value;
    }
    print_r(calcularNeto(5));  => VA A DEVOLVER 5.00

    function retornaEntero(int $value) : int{
        return $value + 1.50;
    }
    print_r(retornaEntero(8));  => VA A DEVOLVER 8, devuelve la parte entera solamente

    /////////////////// HASHING ////////////////////

    password_hash(string $password, int $algoritmo);
    password_hash("admin123", PASSWORD_DEFAULT);
    password_verifiy(string $password, string $hash);

    $claveEncriptada = (string muy largo);
    password_verifiy("123345", $claveEncriptada); => ARROJA FALSE
    password_verifiy("admin123", $claveEncriptada); => ARROJA TRUE
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Método GET  para pedir información de un recurso específico. Query string se incluye en el URL
    <form action="" method = "GET" action = ""></form> -->

    <!-- Método POST  para pedir información a ser procesada por un recurso específico. Query string viaja en el
        cuerpo del mensaje. "action" determina que elemento lo procesa, si no dice nada lo procesa la misma página.
    <form action="" method = "GET" action = ""></form> -->

    <form action="" mehtod="POST" enctype="multipart/form-data">
        <input type="file" name="archivo1" id="archivo1" accept=".jpg, .jpeg, .png"> 
    </form>
</body>
</html>


