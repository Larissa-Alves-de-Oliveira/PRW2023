<?php
    $n1 = $_POST ['primeiro'];
    $n2 = $_POST ['segundo'];

    $val = $_POST['escolha'];

    if($val == 1){
        $calc = $n1 + $n2;
        echo $calc;
    }

    if($val == 2){
        $calc = $n1 - $n2;
        echo $calc;
    }

    if($val == 3){
        $calc = $n1 / $n2;
        echo $calc;
    }

    if($val == 4){
        $calc = $n1 * $n2;
        echo $calc;
    }
?>