<?php 
    $nome = readline();
    $salaf = readline();
    $vendas = readline();

    $comi = $vendas * 0.15;
    $final = $salaf + $comi;
    $final = number_format($final, 2, ".", "");

    echo "TOTAL = $final\n";

?>