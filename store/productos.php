<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Roley Store - Sobre Nosotros</title>
    <meta charset="utf-8">
	<?php include "storeHeader.php"; ?>
</head>

<body>

    <!-- Menu -->
    <div class="container-fluid" style="background-color: #e3f2fd;">
        <div class="container py-2">
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../store/productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/ofertas.php">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/nosotros.php">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/contacto.php">Contáctanos</a>
                </li>
				<?php
				if (!empty($_SESSION["clienteID"])) {
				?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hola <?php echo $_SESSION["nombre"] ?></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="../bd/controlLogoutCliente.php">Cerrar Sesión</a></li>
						</ul>
					</li>
				<?php
				} else {
				?>
					<li class="nav-item">
						<a class="nav-link" href="loginCliente.php"><i class="fa-solid fa-user"></i> Inicia Sesión</a>
					</li>
				<?php
				}
				?>
            </ul>
        </div>
    </div>

    <!-- Productos -->
	<div class="container">
		<div class="h2 my-3">Nuestros productos más vendidos</div>
	</div>
	<div class="container bg-light">
		<div class="row">
			<?php
				include "../bd/conexion.php";
				$sql = $conexion->query("select * from producto");
				while ($datos = $sql->fetch_object()) { ?>
					<div class="col-4 py-2">
						<div class="card h-100">
						<div class="text-center" style="height: 300px;"><img src="data:image/jpg;base64, <?php echo base64_encode($datos->imagen); ?>" class="img-card-top h-100"></div>
							<div class="card-body">
								<h5 class="card-title"><?= $datos->nombre ?></h5>
								<?php
								if (!empty($_SESSION["clienteID"])) {
								?>
									<p class="card-text"><?= $datos->descripcion ?></p>
								<?php
								}
								?>
							</div>
							<div class="card-footer">
								<small>Precio: <?= $datos->precio ?></small>
							</div>
						</div>
					</div>
				<?php }
			?>
		</div>
	</div>

    <!-- Contacto -->
	<div class="container-fluid" style="background-color: #e3f2fd;">
		<div class="container py-3">
			<div class="row justify-content-between">
				<div class="col-4">
					<div class="h5">Nuestras redes</div>
					<a href="https://www.instagram.com/roley_peru/" target="_blank"><img src="../iconos/instagram.png" class="w-25"></a>
				</div>
				<div class="col-4">
					<div class="h5">Contáctanos</div>
					<a href="https://api.whatsapp.com/send?phone=51994964790&text=Hola,%20quiero%20consultar%20los%20productos." target="_blank"><img src="../iconos/whatsapp.png" class="w-25"></a>
				</div>
			</div>
		</div>
	</div>

	<!-- ChatBot -->
	<?php include "chatbot.php"; ?>

</body>

</html>