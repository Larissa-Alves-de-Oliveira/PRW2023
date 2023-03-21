<?php
    date_default_timezone_set('America/Sao_Paulo');

    echo " Data atual: ". date('d/m/y')."<br>"; //Trocar br por \n - <br> não quebra linha
    echo "Data atual: ".date('d-m-Y')."<br>";

    $data_hoje = date('d/m/Y');

    echo $data_hoje;
?>