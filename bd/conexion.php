<?php
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "roleyDB";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion) {
    die("No hay conexión: ".mysqli_connect_error());
}