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
                    <a class="nav-link" aria-current="page" href="../index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../store/productos.html">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/ofertas.html">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/nosotros.html">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../store/contacto.html">Contáctanos</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Los más vendidos -->
        <div class="container">
            <div class="h2 py-3">NUESTROS PRODUCTOS</div>
        </div>
        <div class="container text-center">
            <div class="row">
				<?php
				include "../admin/conexion.php";
				$sql = $conexion->query("select * from producto");
				while ($datos = $sql->fetch_object()) { ?>
					 <div class="col-4 py-2">
						<img src="data:image/jpg;base64, <?php echo base64_encode($datos->imagen); ?>">
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
                    <img src="../imagenes/RedesSociales.gif">
                </div>
                <div class="col-4">
                    <div class="h5">Contáctanos</div>
                    <img src="../imagenes/Contactos.png">
                </div>
            </div>
        </div>
    </div>

</body>

</html>