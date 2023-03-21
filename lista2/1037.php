<?php
    $n = readline();
    
    if ($n >= 0 && $n <= 25.00){
        echo "Intervalo [0,25]\n";
    }
    if ($n > 25 && $n <= 50.00){
        echo "Intervalo (25,50]\n";
    }
    if ($n > 50.00 && $n <= 75.00){
        echo "Intervalo (50,75]\n";
    }
    if ($n > 75.00 && $n <= 100.00){
        echo "Intervalo (75,100]\n";
    }
    if ($n < 0 || $n > 100){
        echo "Fora de intervalo\n";
    }
?>