<?php
/*Percorrer elementos de um vetor*/
    $alunos = array("Murilo","Cassio","Ricardo","Joao");
    print_r($alunos); // Imprime todos os elementos do vetor
    echo "<br>";
    echo "Quantidade de elementos:".count($alunos)."<br>";
    echo "<hr>";
    sort($alunos);//Ordenar vetor de forma crescnte
    for($x = 0; $x < count($alunos); $x++)
    {
        echo "Aluno na posição $x: ".$alunos[$x]."<br>";
        echo "Quantidade de caracteres: ".strlen($alunos[$x])."<br>";
        echo "<hr>";
    }

    $indice = array_search("Murilo",$alunos);
    if($indice === false)
        echo "elementos não encontrados!<br>";
    else
        echo "Elemento encontrado na posição $indice!<br>"    
?>