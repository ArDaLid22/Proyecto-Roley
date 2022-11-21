<?php
require "../bd/conexion.php";

$id=$_GET['id'];

$sql1 = "SELECT producto.productoID, producto.nombre AS prodName, categoria.nombre AS catName, producto.descripcion, producto.imagen, producto.stock, producto.precio, estado.nombre AS estName FROM producto INNER JOIN categoria ON producto.categoriaID = categoria.categoriaID INNER JOIN estado ON producto.estadoID = estado.estadoID WHERE productoID='$id'";
$response = $conexion->query($sql1);
$col = $response->fetch_assoc();

$sql2 = "SELECT * FROM producto WHERE productoID='$id'";
$result = $conexion->query($sql2);
$row = $result->fetch_assoc();

include "adminHeader.php";
?>

<body>
    <div class="container py-3">
        <div class="d-flex">
            <div class="p-2 w-100"><h4>EDITAR PRODUCTO</h4></div>
            <div class="p-2 flex-shrink-1">
                <a href="adminProductos.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Volver</button></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="bg-warning bg-gradient bg-opacity-25 p-3 col-6">
                <p class="text-center fw-bold fs-5">Datos Actuales</p>
                <p>
                    <label class="fw-bold">Nombre Producto</label><br>
                    <label><?= $col['prodName'] ?></label>
                </p>
                <p>
                    <label class="fw-bold">Categoria</label><br>
                    <label><?= $col['catName'] ?></label>
                </p>
                <p>
                    <label class="fw-bold">Descripción</label><br>
                    <label><?= $col['descripcion'] ?></label>
                </p>
                <p>
                    <label class="fw-bold">Imagen</label><br>
                    <label><img src="data:image/jpg;base64, <?php echo base64_encode($col['imagen']); ?>" style="max-height: 180px"></label>
                </p>
                <p>
                    <label class="fw-bold">Precio</label><br>
                    <label><?= $col['precio'] ?></label>
                </p>
                <p>
                    <label class="fw-bold">Stock</label><br>
                    <label><?= $col['stock'] ?></label>
                </p>
                <p>
                    <label class="fw-bold">Estado</label><br>
                    <label><?= $col['estName'] ?></label>
                </p>
            </div>
            <div class="bg-primary bg-gradient bg-opacity-50 p-3 col-6">
                <form action="../bd/update.php" method="POST" enctype="multipart/form-data">
                    <p class="text-center fw-bold fs-5">Nuevos Datos</p>
                    <input type="hidden" name="productoID" id="productoID" value="<?php echo $row['productoID']?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre Producto</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Categoria</label>
                        <input type="number" class="form-control" name="categoriaID" id="categoriaID" value="<?php echo $row['categoriaID']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Imagen</label>
                        <input type="file" class="form-control" accept="image/*" name="imagen" id="imagen">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precio" value="<?php echo $row['precio']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stock</label>
                        <input type="number" class="form-control" name="stock" id="stock" value="<?php echo $row['stock']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <select class="form-select" aria-label="Default select example" name="estadoID" id="estadoID">
                            <option value="1">Regular</option>
                            <option value="2">Oferta</option>
                            <option value="3">Agotado</option>
                        </select>
                    </div>
                    <button type="submit" value="Actualizar" class="btn btn-success">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>