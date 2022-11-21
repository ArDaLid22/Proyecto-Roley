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
					<a class="nav-link active" aria-current="page" href="../store/Home.php">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Controladores/UsuarioControlador.php?action=productos">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Controladores/UsuarioControlador.php?action=ofertas">Ofertas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Controladores/UsuarioControlador.php?action=nosotros">Sobre Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Controladores/UsuarioControlador.php?action=contacto">Contáctanos</a>
				</li>
			</ul>
		</div>
	</div>

    <!-- Formulario de Contacto -->
    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Escríbenos</h5>
                <form action="enviarMensaje.php" method="POST">
                    <div class="row g-3 justify-content-center py-3">
                        <div class="col-2 align-self-center">
                            <label>Nombre</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                    </div>
                    <div class="row g-3 justify-content-center py-3">
                        <div class="col-2 align-self-center">
                            <label>Número de contacto</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="numero" id="numero">
                        </div>
                    </div>
                    <div class="row g-3 justify-content-center py-3">
                        <div class="col-2 align-self-center">
                            <label>Correo electrónico</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="correo" id="correo">
                        </div>
                    </div>
                    <div class="row g-3 justify-content-center py-3">
                        <div class="col-2 align-self-center">
                            <label>Mensaje</label>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-center py-1">
                        <div class="col-7 align-self-center">
                            <textarea class="form-control" rows="3" name="mensaje" id="mensaje"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Otros Canales-->
    <div class="container py-2">
        <h3> También puedes contactarnos por otros canales</h3>
        <p>Número : 999 - 999 - 999</p>
        <p>Correo : contacto@roleystore.com</p>
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