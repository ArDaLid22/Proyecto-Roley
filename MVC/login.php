<?php
require_once 'Modelos/conexion.php';
session_start();

		$usuario = $_POST['nombre'];
        $contraseña = $_POST['password'];
        $sql="SELECT * FROM usuarios WHERE USUARIO='".$username."'";
        $resultados = $db -> query($sql);
        $fila = mysqli_fetch_assoc($resultados);
        $passwordHash = $fila['password'];
        if(password_verify($password,$passwordHash)){
            $_SESSION['logueado'] = true;
            header("Location:Vistas/Usuario/inicio.php");
        }else{
            header("Location: index.php");
        }
?>