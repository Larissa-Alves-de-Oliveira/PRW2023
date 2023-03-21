<?php
    $n = explode(" ", fgets(STDIN));
    
    if  ($n[0] % $n[1] == 0 || $n[1] % $n[0] == 0){
        echo "Sao Multiplos\n";
    }
    else{
        echo "Nao sao Multiplos\n";
    }
?>