<?php
     $data = date('d/m/Y');
     $dia = substr($data,0,2);
     echo "Dia: ".$dia."<br>";
     //Implementar Mês e ano
     $mes = substr($data,3,2);
     echo "Mes: ".$mes."<br>";
     //Função composta pela variavel, a posição dos 
     $ano = substr($data,6,4);
     echo "Ano: ".$ano."<br>";
?>