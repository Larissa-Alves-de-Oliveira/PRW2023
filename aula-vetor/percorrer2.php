<?php
    $alunos = array("Murilo","Cássio","Ricardo","Joao");
    print_r($alunos);//Imprima todos os elementos do vetor 
    echo "<br>";

    //uset remove elemento de uma determinada posição
    unset($alunos[1]);
    print_r($alunos);
    echo "<br>";

    //array values reestabelece os indices
    $alunos = array_values($alunos);
    print_r($alunos);
    echo "<br>";
?>