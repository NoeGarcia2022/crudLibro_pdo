<?php
// prueba de envio de datos
// print_r($_POST);

// nuestra conexion
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];

$sql = $conexion->prepare("UPDATE tb_libros SET nombreLibro=?, autorLibro=?, descripcionLibro=? WHERE idLibro=?;");
$resultado = $sql->execute([$nombre, $autor, $descripcion, $id]);

if ($resultado === true) {
    header('Location:index.php');
} else {
    echo "Error al actualizar";
}
