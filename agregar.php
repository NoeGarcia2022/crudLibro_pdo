<?php
// prueba de envio de datos
// print_r($_POST);


// conexion de nuestra bd

include 'conexion.php';

$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];

$sql = $conexion->prepare("INSERT INTO tb_libros
                                (nombreLibro, autorLibro, descripcionLibro) 
                            VALUE (?,?,?)");

$resultado = $sql->execute([$nombre, $autor, $descripcion]);

if ($resultado) {
    header('Location:index.php');
} else {
    echo "No se insertaron los datos";
}
