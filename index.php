<?php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$comando = $con-> query("SELECT id, nombre, apellido, telefono, direccion FROM usuarios ORDER BY id DESC");
$comando->execute();
$resultado=$comando->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>


    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script rel="stylesheet" href="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        <div class="row">
            <div class="col">
                <h4>Usuarios
                    <a href="nuevo.php" class="btn btn-primary float-right">Nuevo</a>
                </h4>
            </div>
        </div>
        <div class="row py-3">
            <div class="col">
              <table class="table table=border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($resultado as $key)
                    {
                        ?>
                            <tr>
                                <td><?php echo $key['id'];?></td>
                                <td><?php echo $key['nombre'];?></td>
                                <td><?php echo $key['apellido'];?></td>
                                <td><?php echo $key['telefono'];?></td>
                                <td><?php echo $key['direccion'];?></td>
                            </tr>
                        <?php 
                    } ?>
                </tbody>
              </table>
            </div>
        </div>
    </main>
    
</body>
</html>