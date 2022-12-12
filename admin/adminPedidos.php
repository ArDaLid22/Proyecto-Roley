<?php
session_start();

if (empty($_SESSION["nombre"])) {
    header("location: index.php");
}

include "adminHeader.php";
?>