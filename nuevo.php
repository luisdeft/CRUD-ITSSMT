<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script rel="stylesheet" href="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        <div class="row">
            <div class="col">
                <h4>Nuevo Registro</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
                    <div class="col-md-2">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" require autofocus>
                    </div>

                    <div class="col-md-2">
                        <label for="apellidop" class="form-label">Apellido Paterno</label>
                        <input type="text" id="apellidop" name="apellidop" class="form-control" require>
                    </div>

                    <div class="col-md-2">
                        <label for="apellidom" class="form-label">Apellido Materno</label>
                        <input type="text" id="apellidom" name="apellidom" class="form-control" require>
                    </div>

                    <div class="col-md-2">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="tel" id="telefono" name="telefono" class="form-control" require>
                    </div>

                    <div class="col-md-4">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" require>
                    </div>

                    <div class="col-md-12">
                        <a class="btn btn-secondary" href="index.php">Regresar</a>
                        <button type="submit" class="btn btn-primary" name="id">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    </body>
</html>