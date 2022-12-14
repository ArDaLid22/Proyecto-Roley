<!DOCTYPE html>
<html>

<head>
	<title>Roley Store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!--link rel="stylesheet" href="css/all.css"-->
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>

<body>

	<!-- Menu -->
	<div class="container-fluid" style="background-color: #e3f2fd;">
		<div class="container py-2">
			<ul class="nav nav-pills justify-content-end">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Vistas/store/productos.php">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Vistas/store/ofertas.php">Ofertas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Vistas/store/nosotros.html">Sobre Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Vistas/store/contacto.php">Contáctanos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Controladores/UsuarioControlador.php?action=login">Login</a>
				</li><li class="nav-item">
					<a class="nav-link" href="Controladores/UsuarioControlador.php?action=registrate">Registro</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- Carrusel Ofertas -->
	<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="10000">
				<a href="store/ofertas.php"><img src="Vistas/imagenes/off1.png" class="d-block w-100"></a>
			</div>
			<div class="carousel-item" data-bs-interval="2000">
				<a href="store/ofertas.php"><img src="Vistas/imagenes/off2.png" class="d-block w-100"></a>
			</div>
			<div class="carousel-item">
				<a href="store/ofertas.php"><img src="Vistas/imagenes/off3.png" class="d-block w-100"></a>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Top Productos -->
	<div class="container">
		<div class="h2 my-3">Nuestros productos más vendidos</div>
	</div>
	<div class="container text-center">
		<div class="row">
			<?php
				include "Modelos/conexion.php";
				$sql = $conexion->query("select * from producto");
				while ($datos = $sql->fetch_object()) { ?>
					 <div class="col-4 py-2">
						<img src="data:image/jpg;base64, <?php echo base64_encode($datos->imagen); ?>" class="img-thumbnail">
						<p><?= $datos->nombre ?></p>
						<p><?= $datos->descripcion ?></p>
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
					<a href="https://www.instagram.com/roley_peru/" target="_blank"><img src="Vistas/iconos/instagram.png" class="w-25"></a>
				</div>
				<div class="col-4">
					<div class="h5">Contáctanos</div>
					<a href="https://api.whatsapp.com/send?phone=51994964790&text=Hola,%20quiero%20consultar%20los%20productos." target="_blank"><img src="Vistas/iconos/whatsapp.png" class="w-25"></a>
				</div>
			</div>
		</div>
	</div>
	

</body>

</html>