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
					<a class="nav-link" href="../store/productos.php">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../store/ofertas.php">Ofertas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="../store/nosotros.php">Sobre Nosotros</a>
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

    <!-- Sobre Nosotros -->
    <div class="container py-5">
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title">RESEÑA HISTÓRICA</h5><br>
                  <p class="card-text">La Empresa “ ROLEY “ E.I.R.L., es una empresa peruana constituida en los años 2019 en tiempos de pandemia COVID-19, que se creó con el objetivo social inicial de brindar la comercialización de sus productos de alta calidad contribuyendo la facilitación de la desinfección y limpieza del hogar. Actualmente la  Empresa “ ROLEY “ E.I.R.L., cuenta con variedades de productos a su disponibilidad y variedades para el uso de sus clientes.</p>
                </div>
              </div>
              <div class="col-md-5">
                <img src="../imagenes/logo.png" class="rounded">
              </div>
            </div>
          </div>
    </div>

    <div class="container-fluid" style="background-color: #E0DDDD;">
        <div class="container py-5">
            <div class="text-center">
                <h5 class="card-title">MISIÓN</h5>
                <p class="card-text">Ser una empresa que se desarrolle de forma confiable, segura, sólida, flexible y rentable, construyendo a la satisfacción de las necesidades de nuestros compradores de nuestros productos.</p>
                <br>
                <h5 class="card-title">VISIÓN</h5>
                <p class="card-text">Proporcionar al mercado de Lima , de manera eficiente los productos que tenemos a la venta, velando siempre que sean productos de alta calidad, con el propósito de satisfacer con la necesidad del cliente.</p>
            </div>
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