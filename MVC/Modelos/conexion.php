<?php
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "roleyDB";

$conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conexion->connect_error) {
    die ("Conexion fallida: ".$conexion->connect_error);
}
?>