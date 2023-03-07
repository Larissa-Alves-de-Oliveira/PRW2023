<?php
    //linha 1 - 12 1 5.30
    //linha 2 - 16 2 5.10
    $linha1 = readline();
    $linha2 = readline();

    $val1 = explode('',$linha1);
    $qtd1 = intval($val1[1]);
    $vlr1 = floatval($val1[2]);

    $val2 = explode('',$linha2);
    $qtd2 = intval($val1[1]);
    $vlr2 = floatval($val1[2]);

    $total = ($qtd1 * $vlr1) + ($qtd2 * $vlr2);
    $total = number_format($total, 2, ".", "");

    echo "VALOR A PAGAR: RS $total\n";




?>