<?php
    $p = $_POST['qt-p'];
    $m = $_POST['qt-m'];
    $g = $_POST['qt-g'];

    $pequeno = $p * 10;
    $medio = $m * 12;
    $grande = $g * 15;

   $total = $pequeno + $medio + $grande;

    echo "Valor total = $total";
?>