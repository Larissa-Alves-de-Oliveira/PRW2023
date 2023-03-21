<?php
    $segundos = readline();
    
    $horas = $segundos / 3600;
    $horas =  floor($horas);
    $segundos = $segundos % 3600;
    $minutos = $segundos / 60;
    $minutos =  floor($minutos);
    $segundos = $segundos % 60;
    echo "$horas:$minutos:$segundos\n";
?>