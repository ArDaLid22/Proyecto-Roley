<?php
require "conexion.php";

$nombre = $_POST['catNombre'];

$sql = "INSERT INTO categoria(categoriaID, nombre) VALUES(NULL, '$nombre')";

if ($conexion->query($sql) === TRUE) {
    header("Location: ../admin/adminProductos.php");
} else {
    echo "Error al registrar el categoria".$conexion->error;
}
?>