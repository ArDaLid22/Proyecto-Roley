<?php
require "conexion.php";

session_start();

if (!empty($_POST["btnlogin"])) {
    if (!empty($_POST["emailID"]) and !empty($_POST["passID"])) {
        $user = $_POST["emailID"];
        $pass = $_POST["passID"];
        $sql = $conexion->query("SELECT * FROM cliente WHERE email='$user' AND contraseña='$pass'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["clienteID"] = $datos->clienteID;
            $_SESSION["nombre"] = $datos->nombre;
            header("location: ../index.php");
        } else {
            echo "Los datos ingresados son incorrectos.";
        }
    } else {
        echo "Por favor, llene ambos campos para ingresar.";
    }
}
?>