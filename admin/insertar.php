<?php
include '../bd/conexion.php';


$nombre = $_POST['nombre'];
$categoriaID = $_POST['categoriaID'];
$descripcion = $_POST['descripcion'];
//$imagen = $_FILES['imagen']['name'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$estadoID = $_POST['estadoID'];


$imagen = $_FILES['imagen']['tmp_name'];
$imgContenido = addslashes(file_get_contents($imagen));


$sql="INSERT INTO producto(nombre,categoriaID,descripcion,imagen,stock,precio,estadoID) 
VALUES('$nombre','$categoriaID','$descripcion','$imgContenido','$stock','$precio','$estadoID')";
$query = mysqli_query($conexion,$sql) or die("error de registro");
if($query){
    header('Location:menuAdmin.php');
}else{
    echo "pipipi";
}
?>