<?php

    $num = readline();
    
    while( $num > 0 ){
      
    $l = readline();

    $strl = (string)$l;

    $ld = 0;  

    for( $i = 0 ; $i < strlen($l) ; $i++ ){
      
        $niq = $strl[$i];

        settype($niq, "integer"); 

        if($niq == 0 || $niq == 6 || $niq == 9){
          
            $ld += 6;
            
        }

        if($niq == 1){
          
            $ld += 2;
            
        }

        if($niq == 2 || $niq == 3 || $niq == 5){
          
            $ld += 5;
            
        }

        if($niq == 4){
          
            $ld += 4;
            
        }

        if($niq == 7){
          
            $ld += 3;
            
        }

        if($niq == 8){
          
            $ld += 7;
            
        }
        
    }

    echo "$ld leds\n";

    $num--;
    
}

?>