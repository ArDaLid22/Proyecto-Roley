<?php
require "../../Modelos/conexion.php";

$nombre = $_POST['nombre'];
$numero = $_POST['numero'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensaje(msgID,fecha,nombre,numero,correo,mensaje) VALUES(NULL, NOW(),'$nombre','$numero','$correo','$mensaje')";

if ($conexion->query($sql) === TRUE) {
    header("Location: contacto.php");
} else {
    echo "Error al registrar el mensaje".$conexion->error;
}
?>