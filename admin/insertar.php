<!-- Formulario de registro producto -->
<form class="col-4" action="../bd/create.php" method="POST" enctype="multipart/form-data">
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