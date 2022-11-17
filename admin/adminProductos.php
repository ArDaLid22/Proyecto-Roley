<?php include "adminHeader.php"; ?>

<body>
    <div class="container py-3">
        <div class="d-flex">
            <div class="p-2 w-100"><h4>GESTIÓN DE PRODUCTOS</h4></div>
            <div class="p-2 flex-shrink-1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agrega un nuevo producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include "formularioInsertar.php"; ?>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 p-4">
                <?php include "../bd/read.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>