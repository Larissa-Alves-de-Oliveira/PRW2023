<?php 
    $data = date('d/m/Y');
    echo $data."<br>";
    $d = explode('/',$data);

    echo "Dia: ".$d[0]."<br>";
    echo "Mês: ".$d[1]."<br>";
    echo "Ano: ".$d[2]."<br>";
    /*Utilizar explode para separar as
    palavras utilizando espaço*/
    $str = "IFSP Campus Birigui teste\n";
    $s = explode(" ",$str);
    for ($i = 0; $i<count($s); $i++){
        echo $s[$i]."<br>";
    }

?>