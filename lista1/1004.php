<?php
    $n = 3.14159;
    $r = readline();

    $area = $n * ($r * $r);
    $area = number_format($area, 4, ".", "");

    echo "A = $area";
?>