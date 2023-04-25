<?php
    $ano =  $_POST ['ano'];

    if($ano % 4 == 0 && $ano % 100 != 0){
        echo "Ano bissexto";
    }
    else{
        echo "Não é um ano bissexto";
    }
?>