<?php
    $valor = $_POST['numero'];

    for($i = 1; $i <= 10; $i++){
        $tabuada = $valor * $i;
        echo $tabuada,"<br>";
    }
?>