<?php
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "roleyDB";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion) {
    die("No hay conexión: ".mysqli_connect_error());
}

$fuser = $_POST["emailID"];
$fpass = $_POST["passID"];

$query = mysqli_query($conexion, "SELECT * FROM admin WHERE correo = '".$fuser."' AND contraseña = '".$fpass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
	//header("Location: menuAdmin.php")
	echo "Bienvenido: ".$fuser;
} else {
	echo "No ingreso";
}

?>