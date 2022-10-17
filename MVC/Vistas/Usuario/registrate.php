<?php

include_once '../Menu/HeaderLogin.php';

?>


<body class="img js-fullheight" style="background-image: url(../Vistas/images/bg2.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">KIPOSH</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">CREA TU CUENTA</h3>
						<form action="UsuarioControlador.php" id="registrar" method="POST" class="signin-form">
							<div class="form-group">
								<input type="hidden" name="action" value="insert">
								<input type="text" class="form-control" placeholder="Nombre"  name="nombre" id="nombre"  required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Apellidos"  name="apellido" id="apellido" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Usuario"  name="usuario" id="usuario" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="CorSreo"  name="correo" id="correo" required>
							</div>		
							<div class="form-group">
								<input type="date" class="form-control" placeholder="Fecha"  name="fecharegistro" id="fecharegistro" required >
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="estado"  name="estado" id="estado" required >
							</div>
							<div class="form-group">
								<input type="number" class="form-control" placeholder="Telefono"  name="telefono" id="telefono" required>
							</div>										
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="CONTRASEÑA"   name="contraseña" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							
							<!-- <div class="two fields">
								<div class="field">
									<label for="rol">Rol</label>
									<select name="rol" id="">
										<option value="Administrador">Administrador</option>
										<option value="Usuario">Usuario</option>
										<option value="Invitado">Invitado</option>					
									</select>
								</div>
							</div> -->

							<div class="form-group">
								<button class="form-control btn btn-primary submit px-3" type="submit">REGISTRAR</button>

							</div>
							<div class="form-group d-md-flex">
								<div class="w-1">
									<label class="checkbox-wrap checkbox-primary">He leido y acepto las politicas de privacidad
										<input type="checkbox" checked>
										<span class="checkmark"></span>

									</label>
								</div>

							</div>
						</form>
						<p class="w-100 text-center" href="REGISTRATE.html"><a href="LOGIN.html">INICIAR SESION</a></p>
					</div>
				</div>
	</section>
	
	<script>

		$(document).ready(function(){

			$("#registrar").validate({

				rules:{
					nombre: 'required'
					
				},
				message:{
					nombre: 'No puede dejar'
				}

			});

		});
		
	</script>
	<?php
            include_once '../Menu/FooterLogin.php';
        ?>
</body>

</html>