<?php
include('../bd/conexion.php');
$con=conectar();

$productoID = $_POST['productoID'];
$nombre = $_POST['nombre'];
$categoriaID = $_POST['categoriaID'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$estadoID = $_POST['estadoID'];

$sql="INSERT INTO producto VALUES('$productoID','$nombre','$categoriaID','$descripcion','$imagen','$stock','$precio','$estadoID')";
$query = mysqli_query($con,$sql);

if($query){

    Header("Location: menuAdmin.php");

}else{
    echo 'nO INSerto';
}

?>


