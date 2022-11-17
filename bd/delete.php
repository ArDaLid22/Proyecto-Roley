<?php
require "conexion.php";

$itemID = $_GET['id'];

$sql = "DELETE FROM producto WHERE productoID='".$itemID."'";

if ($conexion->query($sql) === TRUE) {
    header("Location: ../admin/adminProductos.php");
} else {
    echo "Error al eliminar el producto".$conexion->error;
}
?>