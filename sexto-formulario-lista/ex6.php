<?php
    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $fq = $_POST['frequencia'];

    $media = ($n1 + $n2) / 2;

    if($media > 5 && $fq > 75){
        echo "Aluno aprovado";
    }

    if( $fq > 75 && $media < 5){
        echo "Reprovado por nota";
    }

    if($media > 5 &&  $fq < 75){
        echo "Reprovado por falta";
    }
?>