<?php
require "conexion.php";

$itemID = $_GET['id'];

$sql = "DELETE FROM producto WHERE productoID='".$itemID."'";

if ($conexion->query($sql) === TRUE) {
    header("Location: ../admin/menuAdmin.php");
} else {
    echo "Error al eliminar el producto".$conexion->error;
}
?>