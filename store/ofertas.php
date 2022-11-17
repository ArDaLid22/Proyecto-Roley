<!DOCTYPE html>
<html>

<head>
    <title>Roley Store - Sobre Nosotros</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
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
                    <a class="nav-link" href="../store/productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../store/ofertas.php">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/nosotros.html">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/contacto.php">Contáctanos</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Lista de Ofertas -->
    <div class="container">
		<div class="h2 my-3">Hecha un vistazo a nuestras OFERTAS</div>
	</div>
	<div class="container bg-light">
		<div class="row">
			<?php
				include "../bd/conexion.php";
				$sql = $conexion->query("select * from producto where estadoID='2'");
				while ($datos = $sql->fetch_object()) { ?>
					<div class="col-4 py-2">
						<div class="card h-100">
							<img src="data:image/jpg;base64, <?php echo base64_encode($datos->imagen); ?>" class="img-card-top">
							<div class="card-body">
								<h5 class="card-title"><?= $datos->nombre ?></h5>
								<p class="card-text"><?= $datos->descripcion ?></p>
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

</body>

</html>