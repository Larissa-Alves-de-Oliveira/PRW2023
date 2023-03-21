<?php
    $dias = readline();
    
    $anos = $dias / 365;
    $anos = floor($anos);
    $meses = ($dias % 365) / 30;
    $meses = floor($meses);
    $dias =  ($dias % 365) % 30;
    
    echo "$anos ano(s)\n";
    echo "$meses mes(es)\n";
    echo "$dias dia(s)\n";
    
?>