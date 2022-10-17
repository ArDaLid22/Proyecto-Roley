<?php
require '../../Modelos/conexion.php';

session_destroy();

header("location:login.php");

?>