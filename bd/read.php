<?php
require "../bd/conexion.php";
?>

<table class="table table-hover align-middle">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Estado</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT producto.productoID, producto.nombre AS prodName, categoria.nombre AS catName, producto.descripcion, producto.imagen, producto.stock, producto.precio, estado.nombre AS estName FROM producto INNER JOIN categoria ON producto.categoriaID = categoria.categoriaID INNER JOIN estado ON producto.estadoID = estado.estadoID ORDER BY producto.productoID DESC";
        $result = $conexion->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
            <th><?= $row['prodName'] ?></th>
            <th><?= $row['catName'] ?></th>
            <th><?= $row['descripcion'] ?></th>
            <th><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" style="max-height: 100px"></th>
            <th><?= $row['stock'] ?></th>
            <th><?= $row['precio'] ?></th>
            <th><?= $row['estName'] ?></th>
            <th><a href="actualizar.php?id=<?php echo $row['productoID'] ?>" class="btn btn-warning">Editar</a></th>
            <th><a href="../bd/delete.php?id=<?php echo $row['productoID'] ?>" class="btn btn-danger">Eliminar</a></th>
        </tr>

        <?php
        }
        ?>
        
    </tbody>
</table>