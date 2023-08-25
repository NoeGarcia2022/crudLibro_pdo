<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>CRUD PDO</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center bg-primary text-white rounded-10px mb-2">LISTADO DE LIBROS</h1>
    </div>

    <div class="container table-responsive">
        <a href="agregarForm.php" class="btn btn-info mb-2">Agregar Libros</a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">AUTOR</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "conexion.php";

                $sql = $conexion->query("SELECT * FROM tb_libros");
                $fila = $sql->fetchAll(PDO::FETCH_OBJ);

                foreach ($fila as $row) {
                ?>
                    <tr class="">
                        <td scope="row"><?php echo $row->idLibro; ?></td>
                        <td scope="row"><?php echo $row->nombreLibro; ?></td>
                        <td scope="row"><?php echo $row->autorLibro; ?></td>
                        <td scope="row"><?php echo $row->descripcionLibro; ?></td>
                        <td scope="row">
                            <a href="editarForm.php?id=<?php echo $row->idLibro ?>" class="btn btn-success">EDITAR</a>
                            <a href="eliminar.php?id=<?php echo $row->idLibro ?>" class="btn btn-danger">ELIMINAR</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>






    <script src="js/bootstrap.min.js"></script>
</body>

</html>