<?php
function conectarDB() {
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "roleyDB";
    $conexion = mysql_connect($server, $user, $pass) or die ("ERROR: ".mysql_error());
    mysql_select_db($db, $conexion);
    return $conexion;
}
?>