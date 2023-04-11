<?php
	$n = readline();
	$mv = $n;
	$p = 1;
	
	for($cont = 2; $cont <= 100; $cont++){
	    $n = readline();
	    if($n > $mv){
	        $mv = $n;
	        $p = $cont;
	    }
	}
	echo "$mv\n";
	echo "$p\n";
?>