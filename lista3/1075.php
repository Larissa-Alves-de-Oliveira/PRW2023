<?php
	$num = readline();
	$cont;
	for($cont = 1; $cont <= 10000; $cont++){
	    if($cont % $num == 2){
	        echo "$cont\n";
	    }
	}
?>