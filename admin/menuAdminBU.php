<?php
include "adminHeader.php";
?>

<body>
    <h1 class="text-center">GESTION DE PRODUCTOS</h1>
    <div class="container-fluid row">
        <?php
        include "insertar.php";
        ?>
        <div class="col-8 p-4">
            <?php
            include "../bd/read.php";
            ?>
        </div>
    </div>

</html>