<?php
require "conexion.php";

$user = $_POST["emailID"];
$pass = $_POST["passID"];

$sql = "SELECT * FROM admin WHERE correo = '".$user."' AND contraseña = '".$pass."'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
	header("Location: ../admin/menuAdmin.php");
} else {
	header("Location: ../admin/index.php");
}
?>