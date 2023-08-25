<?php
// prueba de eliminar datos
// print_r($_GET);

// coenxion hacia nuestra bd
include 'conexion.php';

$id = ($_GET['id']);

$sql = $conexion->prepare("DELETE FROM tb_libros WHERE idLibro=?;");

$resultado = $sql->execute([$id]);

if ($resultado) {
    header('Location:index.php');
} else {
    echo "error al borrar datos";
}
