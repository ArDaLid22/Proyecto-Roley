<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login Admin</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- FontAwesome Icons -->
        <script src="https://kit.fontawesome.com/8ef4f0069f.js" crossorigin="anonymous"></script>
        <style>
            .cuadro {
                height: 900px;
            }
        </style>
    </head>
    <body>
        <div class="container cuadro d-flex justify-content-center align-items-center">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <div><img src="../imagenes/logo.png" class="card-img-top w-50"></div><br>
                    <h3>Inicia Sesión</h3>
                    <hr />
                    <form method="post" action="../bd/loginAdmin.php">
                        <div class="form-group">
                            <label>Dirección de Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="Correo" id="emailID" name="emailID">
                        </div>
                        <div class="form-group py-2">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" placeholder="Contraseña" id="passID" name="passID">
                        </div>
                        <div class="py-2"><button type="submit" class="btn btn-primary">Ingresar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>