<?php
	$num = readline();
	$cont;
	for($cont = 1; $cont <= $num; $cont++){
	    $n = readline();
	    if($n % 2 == 0 && $n > 0){
	        echo "EVEN POSITIVE\n";
	    }
	     if($n % 2 == 0 && $n < 0){
	        echo "EVEN NEGATIVE\n";
	    }
	    if($n % 2 != 0 && $n < 0){
	        echo "ODD NEGATIVE\n";
	    }
	    if($n % 2 != 0 && $n > 0){
	       echo "ODD POSITIVE\n"; 
	    }
	    if($n == 0){
	        echo "NULL\n";
	    }
	}
?>