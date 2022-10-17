<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>RolayStore - Admin</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- FontAwesome Icons -->
        <script src="https://kit.fontawesome.com/8ef4f0069f.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <h1 class="text-center">CRUD PRODUCTOS</h1>
    <div class="container-fluid row">
        <form class="col-4">
            <h3 class="text-center p-3">Registro productos</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PRODCUTO ID</label>
                <input type="text" class="form-control" name="productoid">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE PRODUCTO</label>
                <input type="text" class="form-control" name="nombreproducto">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CATEGORIA ID</label>
                <input type="text" class="form-control" name="categoriaid">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">IMAGEN</label>
                <input type="file" class="form-control" accept="image/*" name="imagen">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">STOCK</label>
                <input type="text" class="form-control" name="stock">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                    <tr>
                        <th>ProductoID</th>
                        <th>Nombre</th>
                        <th>CategoriaID</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Stock</th>
                        <th>precio</th>
                        <th>estadoID</th>
                        <th></th>
                        <th></th>
                        

                    </tr>
                    </tr>
                </thead>
                <tbody>
  
                    <?php
                    include "conexion.php";
                    $sql = $conexion->query("select * from producto");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <th><?= $datos->productoID ?></th>
                            <th><?= $datos->nombre ?></th>
                            <th><?= $datos->categoriaID ?></th>
                            <th><?= $datos->descripcion ?></th>
                            <th><img src="data:image/jpg;base64, <?php echo base64_encode($datos->imagen); ?>"></th>
                            <th><?= $datos->stock ?></th>
                            <th><?= $datos->precio ?></th>
                            <th><?= $datos->estadoID ?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['productoID'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['productoID'] ?>" class="btn btn-danger">Eliminar</a></th>  

                        </tr>
                    <?php }

                    ?>
                </tbody>
            </table>

        </div>



    </div>

</html>