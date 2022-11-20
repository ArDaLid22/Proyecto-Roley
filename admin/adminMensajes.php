<?php
include "adminHeader.php";
require "../bd/conexion.php"
?>

<body>
    <div class="container py-3">
        <div class="d-flex">
            <div class="p-2 w-100"><h4>Buzón de mensajes</h4></div>
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <?php
                    $sql = "SELECT msgID, fecha, nombre, numero, correo, mensaje FROM mensaje ORDER BY fecha DESC";
                    $result = $conexion->query($sql);
                    while ($row = $result->fetch_assoc()) { ?>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $row['msgID'] ?>" aria-expanded="false">
                                De: <?= $row['nombre'] ?>
                            </button>
                        </h2>
                        <div id="collapse<?= $row['msgID'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?= $row['mensaje'] ?>
                                <br><hr>
                                <div class="small">
                                    Correo: <?= $row['correo']?><br>
                                    Teléfono: <?= $row['numero']?><br>
                                    Fecha: <?= $row['fecha'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>