<?php
require "../bd/conexion.php";
?>

<!-- Agregar Categoria -->
<form class="row g-3" action="../bd/catCreate.php" method="POST">
    <div class="fs-5">Añade una nueva categoría</div>
    <div class="col-auto">
        <label class="col-form-label">Nombre</label>
    </div>
    <div class="col-7">
        <input type="text" class="form-control" id="catNombre" name="catNombre">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-success mb-3">Añadir</button>
    </div>
</from>

<!-- Listado de Categorias-->
<div class="bg-success bg-opacity-25 rounded">
    <div class="fs-5">Lista de categorías</div><br>
    <table class="table table-hover align-middle bg-white">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM categoria";
            $result = $conexion->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <th><?= $row['nombre'] ?></th>
                <th><a href="../bd/catDelete.php?id=<?php echo $row['categoriaID'] ?>" class="btn btn-danger">Eliminar</a></th>
            </tr>

            <?php
            }
            ?>
            
        </tbody>
    </table>
</div>