<?php
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "roleyDB";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion) {
    die("Error en la conexión con el servidor");
    
}
?>