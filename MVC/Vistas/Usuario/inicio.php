<?php
require '../../Modelos/conexion.php';
$instanciaconexion = new conexion1();
if(empty($_SESSION['email'])){
    header("location:../usuarios/login.php");
}
require '../../Inc/MenuLogin.php'
?>
<div style="text-align: center;">
<h1>Bienvenido <?php echo $_SESSION['nombre'];?></h1>
<h2>Al software PHP NOCTURNO</h2>
</div>
<?php
require '../../Inc/Footer.php'
?>