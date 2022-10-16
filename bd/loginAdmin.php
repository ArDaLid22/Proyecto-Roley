<?php
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "roleyDB";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion) {
    die("No hay conexión: ".mysqli_connect_error());
}

$user = $_POST["emailID"];
$pass = $_POST["passID"];

$query = mysqli_query($conexion, "SELECT * FROM admin WHERE correo = '".$user."' AND contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
	header("Location: ../admin/menuAdmin.php");
} else {
	header("Location: ../admin/index.html");
}

?>