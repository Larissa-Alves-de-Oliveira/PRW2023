<?php
    $valor = readline(); 

    $copia = $valor;
    $c100 = $valor / 100;
    $valor = $valor % 100;

    $c50 = $valor / 50;
    $valor = $valor % 50;

    $c20 = $valor / 20;
    $valor = $valor % 20;

    $c10 = $valor / 10;
    $valor = $valor % 10;

    $c5 = $valor / 5;
    $valor = $valor % 5;

    $c2 = $valor / 2;
    $valor = $valor % 2;

    $c1 = $valor / 1;
    $valor = $valor / 1;
    
    $c100 = floor($c100);
    $c50 = floor($c50);
    $c20 = floor($c20);
    $c10 = floor($c10);
    $c5 = floor($c5);
    $c2 = floor($c2);
    $c1 = floor($c1);
    
    echo "$copia\n";
    echo "$c100 nota(s) de R$ 100,00\n";
    echo "$c50 nota(s) de R$ 50,00\n";
    echo "$c20 nota(s) de R$ 20,00\n";
    echo "$c10 nota(s) de R$ 10,00\n";
    echo "$c5 nota(s) de R$ 5,00\n";
    echo "$c2 nota(s) de R$ 2,00\n";
    echo "$c1 nota(s) de R$ 1,00\n";
?>