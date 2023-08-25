<?php
// prueba de envio de datos
// print_r($_GET);

// conexion de nuestra bd
include 'conexion.php';

$Codigoid = $_GET['id'];

$sql = $conexion->prepare("SELECT * FROM tb_libros WHERE idLibro=?");
$sql->execute([$Codigoid]);

$libro = $sql->fetch(PDO::FETCH_OBJ);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Editar Libro</title>
</head>

<body>

    <script src="js/bootstrap.min.js"></script>
    <div class="container">
        <h1 class="text-center bg-primary text-white rounded-10px mb-2">EDITAR LIBROS</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center mt-3">
                <form action="editar.php" method="post" class="form-control bg-secondary text-white">
                    <h1 class="text-center">Formulario de Editar</h1>
                    <hr>
                    <input type="hidden" name="id" value="<?php echo $libro->idLibro ?>">
                    <div class="mb-3 ">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $libro->nombreLibro ?>" required>
                    </div>
                    <div class="mb-3 ">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" id="autor" value="<?php echo $libro->autorLibro ?>" required>
                    </div>
                    <div class="mb-3 ">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $libro->descripcionLibro ?>" required>
                    </div>
                    <div class="mb-3 text-center">
                        <a type="button" href="./index.php" class="btn btn-dark">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>