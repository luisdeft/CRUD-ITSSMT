<?php 
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$correcto = false;

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = $con->prepare("UPDATE usuarios SET nombre=?, apellido_p=?, apellido_m=?, telefono=?, direccion=? WHERE id=?");
    $resultado = $query->execute(array($nombre, $apellidop, $apellidom, $telefono, $direccion, $id));
    if($resultado){
        $correcto=true;
    }
}else{
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = $con->prepare("INSERT INTO usuarios (nombre, apellido_p, apellido_m, telefono, direccion) 
    VALUES (:nom, :apep, :apem, :tel, :dir)");
    $resultado=$query->execute(array('nom'=>$nombre, 'apep'=>$apellidop, 'apem'=>$apellidom, 'tel'=>$telefono, 'dir'=>$direccion));
    
    if($resultado){
        $correcto = true;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardado</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script rel="stylesheet" href="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        <div class="row">
            <div class="col">
                <?php if ($correcto)
                {
                    ?><h3>Registro Guardado</h3>
                    <?php }else{?>
                        <h3>Registro No Guardado</h3>
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="index.php">Regresar</a>
            </div>
        </div>
    </main>
    
</body> 
</html>