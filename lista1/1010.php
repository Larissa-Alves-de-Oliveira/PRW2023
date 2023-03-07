<?php 
    $valor1 = explode(" ", fgets(STDIN));
    $valor2 = explode(" ", fgets(STDIN));
    $calc = ($valor1[2] * $valor1[1]) + ($valor2[2] * $valor2[1]);
    $calc = number_format($calc, 2, ".", "");
    echo "VALOR A PAGAR: R$ $calc\n";
?>