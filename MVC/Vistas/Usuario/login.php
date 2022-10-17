<?php

include_once '../Menu/HeaderLogin.php';

?>
<body class="img js-fullheight" style="background-image: url(../Vistas/images/bg.jpg);">
		<section class="ftco-section">
			<div class="container login-wrapper">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5 login-wrapper">
						<h2 class="heading-section">BIENVENIDOS A KIPOSH</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">

							<form action="UsuarioControlador.php" id="login" method="POST" class="signin-form">
								<div class="form-group">
									<input type="hidden" name="action" value="login">
									<input type="text" class="form-control" placeholder="USUARIO"  name="usuario" id="usuario" required>
								</div>
								<div class="form-group">
									<input id="password-field" type="password" class="form-control" placeholder="CONTRASEÑA"  name="contraseña" id="contraseña" required>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									
									<button type="submit" class="form-control btn btn-primary submit px-3">INGRESAR</button>
								</div>
								<div class="form-group d-md-flex">
				
								
									<p class="w-100 text-center" ><a href="../Controladores/UsuarioControlador.php?action=registrate">REGISTRATE</a></p>
									<p class="w-100 text-center" href="REGISTRATE.html"><a href="">RECUPERAR CONTRASEÑA</a></p>

								</div>
							</form>
						</div>
					</div>
		</section>

        <?php
            include_once '../Menu/FooterLogin.php';
        ?>
	

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>


</body>
</html>