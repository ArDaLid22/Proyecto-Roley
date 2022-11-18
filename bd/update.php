<?php
require "conexion.php";

$productoID = $_POST['productoID'];
$nombre = $_POST['nombre'];
$categoriaID = $_POST['categoriaID'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen']['tmp_name'];
$imgContenido = addslashes(file_get_contents($imagen));
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$estadoID = $_POST['estadoID'];

$sql = "UPDATE producto SET nombre='$nombre',categoriaID='$categoriaID', descripcion='$descripcion', imagen='$imgContenido', stock='$stock', precio='$precio', estadoID='$estadoID' WHERE productoID='$productoID'";

if ($conexion->query($sql) === TRUE) {
    header("Location: ../admin/adminProductos.php");
} else {
    echo "Error al actualizar el producto".$conexion->error;
}
?>