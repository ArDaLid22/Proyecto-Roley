<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>RolayStore - Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/8ef4f0069f.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center">CRUD PRODUCTOS</h1>
    <div class="container-fluid row">
        <form class="col-4" action="../bd/insertar.php" method="POST" enctype="multipart/form-data">
            <h3 class="text-center p-3">Registro productos</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE PRODUCTO</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CATEGORIA ID</label>
                <input type="number" class="form-control" name="categoriaID" id="categoriaID">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">IMAGEN</label>
                <input type="file" class="form-control" accept="image/*" name="imagen" id="imagen">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PRECIO</label>
                <input type="number" class="form-control" name="precio" id="precio">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">STOCK</label>
                <input type="number" class="form-control" name="stock" id="stock">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="estadoID" id="estadoID">
                    <option value="1">Regular</option>
                    <option value="2">Oferta</option>
                    <option value="3">Agotado</option>
                </select>
            </div>
            <input type="submit" value="Registrar"></button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <tr>
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
                    include "../bd/conexion.php";
                    $sql = $conexion->query("SELECT producto.productoID, producto.nombre AS prodName, categoria.nombre AS catName, producto.descripcion, producto.imagen, producto.stock, producto.precio, estado.nombre AS estName FROM producto INNER JOIN categoria ON producto.categoriaID = categoria.categoriaID INNER JOIN estado ON producto.estadoID = estado.estadoID;");
                    while ($datos = $sql->fetch_object()) { ?>

                    <tr>
                        <th><?= $datos->prodName ?></th>
                        <th><?= $datos->catName ?></th>
                        <th><?= $datos->descripcion ?></th>
                        <th><img src="data:image/jpg;base64, <?php echo base64_encode($datos->imagen); ?>" style="max-height: 100px"></th>
                        <th><?= $datos->stock ?></th>
                        <th><?= $datos->precio ?></th>
                        <th><?= $datos->estName ?></th>
                        <th><a href="actualizar.php?id=<?php echo $d['productoID'] ?>" class="btn btn-info">Editar</a></th>
                        <th><a href="delete.php?id=<?php echo $d['productoID'] ?>" class="btn btn-danger">Eliminar</a></th>
                    </tr>
                    <?php }

                    ?>
                </tbody>
            </table>

        </div>
    </div>

</html>