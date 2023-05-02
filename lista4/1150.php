<?php
    $soma=0;
    $q=0;
   
    $x = readline();
    $z = readline();
   
    settype($x, "integer");
    settype($y, "integer");
   
    while($x >= $z){
        $z = readline();
    }
   
    while($soma < $z){
        $soma += $x;
        $q += 1;
        $x++;
    }
   
    print("$q\n");
?>