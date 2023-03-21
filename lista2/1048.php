<?php
    $salario = readline();
    
    if ($salario <= 400.00){
        $reajuste = $salario * 0.15;
        $reajuste = number_format($reajuste, 2, ".", "");
        $novo = $salario + $reajuste;
        $novo = number_format($novo, 2, ".", "");
        
        echo "Novo salario: $novo\n";
        echo "Reajuste ganho: $reajuste\n";
        echo "Em percentual: 15 %\n";
    }
    if ($salario >= 400.01 && $salario <= 800.00){
        $reajuste = $salario * 0.12;
        $reajuste = number_format($reajuste, 2, ".", "");
        $novo = $salario + $reajuste;
        $novo = number_format($novo, 2, ".", "");
        
        echo "Novo salario: $novo\n";
        echo "Reajuste ganho: $reajuste\n";
        echo "Em percentual: 12 %\n";
    }
    if ($salario >= 800.01 && $salario <= 1200.00){
        $reajuste = $salario * 0.10;
        $reajuste = number_format($reajuste, 2, ".", "");
        $novo = $salario + $reajuste;
        $novo = number_format($novo, 2, ".", "");
    
        echo "Novo salario: $novo\n";
        echo "Reajuste ganho: $reajuste\n";
        echo "Em percentual: 10 %\n";
    }
    if ($salario >= 1200.01 && $salario <= 2000.00){
        $reajuste = $salario * 0.07;
        $reajuste = number_format($reajuste, 2, ".", "");
        $novo = $salario + $reajuste;
        $novo = number_format($novo, 2, ".", "");
        
        echo "Novo salario: $novo\n";
        echo "Reajuste ganho: $reajuste\n";
        echo "Em percentual: 7 %\n";
    }
    if ($salario > 2000.00){
        $reajuste = $salario * 0.04;
        $reajuste = number_format($reajuste, 2, ".", "");
        $novo = $salario + $reajuste;
        $novo = number_format($novo, 2, ".", "");
        
        echo "Novo salario: $novo\n";
        echo "Reajuste ganho: $reajuste\n";
        echo "Em percentual: 4 %\n";
    }
?>