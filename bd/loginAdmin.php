<?php
require "conexion.php";

session_start();

if (!empty($_POST["logAdmin"])) {
    if (!empty($_POST["emailID"]) and !empty($_POST["passID"])) {
        $user = $_POST["emailID"];
        $pass = $_POST["passID"];
        $sql = $conexion->query("SELECT * FROM admin WHERE correo='$user' AND contraseña='$pass'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["adminID"] = $datos->adminID;
            $_SESSION["nombre"] = $datos->nombre;
            header("location: ../admin/menuAdmin.php");
        } else {
            echo "Los datos ingresados son incorrectos.";
        }
    } else {
        echo "Por favor, llene ambos campos para ingresar.";
    }
}
?>