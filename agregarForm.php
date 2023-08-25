<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Agregar Libro</title>
</head>

<body>

    <script src="js/bootstrap.min.js"></script>
    <div class="container">
        <h1 class="text-center bg-primary text-white rounded-10px mb-2">AGREGAR LIBROS</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center mt-3">
                <form action="agregar.php" method="post" class="form-control bg-secondary text-white">
                    <h1 class="text-center">Formulario de Registro</h1>
                    <hr>
                    <div class="mb-3 ">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 ">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" id="autor" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 ">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 text-center">
                        <a type="button" href="./index.php" class="btn btn-dark">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>