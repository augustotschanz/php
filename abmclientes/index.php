<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (file_exists("archivo.txt")) {
        // Leer el json del archivo
            $jsonClientes = file_get_contents("archivo.txt");
        // Convertir el json a un array $aClientes
            $aClientes = json_decode($jsonClientes, true);
    }

    $id = isset($_REQUEST["id"]) && $_REQUEST["id"] >= 0? $_REQUEST["id"] : "";

    if($_POST){
        $dni = $_REQUEST["txtDni"];
        $nombre = $_REQUEST["txtNombre"];
        $telefono = $_REQUEST["txtTelefono"];
        $correo = $_REQUEST["txtCorreo"];

        if($id != ""){


            // Crear un array de datos
            $aClientes[$id] = array(
                                "dni" => $dni,
                                "nombre" => $nombre,
                                "telefono" => $telefono,
                                "correo" => $correo,
                                "imagen" => $nuevoNombre
                                );
        }
            else{

                if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
                        $nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000);
                        $archivo_temp = $_FILES ["archivo"]["temp_name"];
                        $nombreArchivo = $_FILES ["archivo"]["name"];
                        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                        $nuevoNombre = "nombre.$extensión";
                        move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");
                    } 

                    $aClientes[] = array(
                                    "dni" => $dni,
                                    "nombre" => $nombre,
                                    "telefono" => $telefono,
                                    "correo" => $correo
                                    );
            }

        $jsonClientes = json_encode($aClientes);
        file_put_contents("archivo.txt", $jsonClientes);
    }

    if ($id >= 0 && isset($_REQUEST["do"]) && $_REQUEST["do"] == "eliminar"){
        // Elimina el cliente del array
        unset($aClientes[$id]);

        // Actualizar el archivo con el nuevo array
        $jsonClientes = json_encode($aClientes);
        file_put_contents("archivo.txt", $jsonClientes);
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>ABM Clientes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-3 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <label>DNI: *</label>
                        </div>
                        <div class="col-12">
                            <input type="text" id="txtDni" name="txtDni" class="form-control col-10" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["dni"] : "" ?>">
                        </div>
                        <div class="col-12">
                            <label>Nombre: *</label>
                        </div>
                        <div class="col-12">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control col-10" required value = <?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : "" ?>>
                        </div>
                        <div class="col-12">
                            <label>Teléfono:</label>
                        </div>
                        <div class="col-12">
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control col-10" value=<?php echo isset($aClientes[$id]) ? $aClientes[$id]["telefono"] : "" ?>>
                        </div>
                        <div class="col-12">
                            <label>Correo: *</label>
                        </div>
                        <div class="col-12">
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control col-10" required value= <?php echo isset($aClientes[$id]) ? $aClientes[$id]["correo"] : "" ?>>
                        </div>
                        <div class="col-12">
                            <p>Archivo adjunto:</p>
                            <input type="file" name="archivo1" id="archivo1" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-12">
                            <p>Archivos admitidos: .jpg, .jpeg, .png</p>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar" name="btnGuardar">Guardar</button>
                        </div>

                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border text-center">
                <tbody>
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    <?php foreach ($aClientes as $pos => $cliente): ?>
                        <tr>
                            <td></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["correo"]; ?></td>
                            <td style="width: 110px;">
                                <a href="index.php?id=<?php echo $pos; ?>"><i class="fas fa-edit"></i></a>
                                <a href="index.php?id=<?php echo $pos; ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>