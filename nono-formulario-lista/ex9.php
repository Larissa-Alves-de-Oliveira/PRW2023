<?php
    $horario = $_POST['hr'];

    if($horario < 12){
        echo "Bom dia";
    }

    if($horario > 12 && $horario <= 18){
        echo "Boa tarde";
    }

    if($horario > 18){
        echo "Boa noite";
    }
?>