<?php
session_start();
require 'conexion.php';
session_start();
$correo = $_POST['emailID'];
$clave = $_POST['passID'];
$q ="SELECT COUNT(*) AS contar FROM admin WHERE correo='$correo' AND contraseña='$clave'";
$consulta= mysqli_query($conexion,$q);
$array= mysqli_fetch_array($consulta);
if($array['contar']>0){	
	$_SESSION['username'] =$correo;
	//$_SESSION['idMail'] =$correo;
	header("location: ../admin/menuAdmin.php");
}
else{
	echo "HAZ INGRESADO MAL TU CONTRASEÑA";
}
?>