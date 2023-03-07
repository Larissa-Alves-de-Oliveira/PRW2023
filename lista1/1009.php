<?php
    $nfun = readline();
    $htra = readline();
    $valorh = readline();

    $salary =  $valorh * $htra;
    $salary = number_format($salary, 2, ".", "");

    echo "NUMBER = $nfun\n";
    echo "SALARY = $salary\n";
?>