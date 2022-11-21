<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$categoriaID = $_POST['categoriaID'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen']['tmp_name'];
$imgContenido = addslashes(file_get_contents($imagen));
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$estadoID = $_POST['estadoID'];

$sql = "INSERT INTO producto(nombre,categoriaID,descripcion,imagen,stock,precio,estadoID) VALUES('$nombre','$categoriaID','$descripcion','$imgContenido','$stock','$precio','$estadoID')";

if ($conexion->query($sql) === TRUE) {
    header("Location: ../admin/adminProductos.php");
} else {
    echo "Error al registrar el producto".$conexion->error;
}
?>