<?php
require "../bd/conexion.php";

$id=$_GET['id'];

$sql = "SELECT * FROM producto WHERE productoID='$id'";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();
?>

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
    <div class="container row">
        <form class="col-4" action="../bd/update.php" method="POST" enctype="multipart/form-data">
            <h3 class="text-center p-3">Actualizar producto</h3>
            <input type="hidden" name="productoID" id="productoID" value="<?php echo $row['productoID']?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE PRODUCTO</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['nombre']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CATEGORIA ID</label>
                <input type="number" class="form-control" name="categoriaID" id="categoriaID" value="<?php echo $row['categoriaID']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">IMAGEN</label>
                <input type="file" class="form-control" accept="image/*" name="imagen" id="imagen">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PRECIO</label>
                <input type="number" class="form-control" name="precio" id="precio" value="<?php echo $row['precio']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">STOCK</label>
                <input type="number" class="form-control" name="stock" id="stock" value="<?php echo $row['stock']?>">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="estadoID" id="estadoID">
                    <option value="1">Regular</option>
                    <option value="2">Oferta</option>
                    <option value="3">Agotado</option>
                </select>
            </div>
            <input type="submit" value="Actualizar"></button>
        </form>
    </div>
</body>