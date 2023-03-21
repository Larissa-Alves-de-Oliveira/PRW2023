<?php
    $valor = explode(" ", fgets(STDIN));

    $delta = sqrt(($valor[1] * $valor[1]) - (4 * $valor[0] * $valor[2]));

    if(($delta >= 0) && ($valor[0] != 0)){
        $r1 = ((-$valor[1] + $delta) / (2 * $valor[0]));
        $r1 = number_format($r1, 5, ".", "");
        $r2 = ((-$valor[1] - $delta) / (2 * $valor[0]));
        $r2 = number_format($r2, 5, ".", "");
        echo "R1 = $r1\n";
        echo "R2 = $r2\n";
    }
    else{
        echo "Impossivel calcular\n";
    }
?>