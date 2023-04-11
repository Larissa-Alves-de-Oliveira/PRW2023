<?php
	$cont;
	$quant = 0;
	$calc = 0;
	for($cont = 1; $cont <= 5; $cont++){
	    $num = readline();
	    if($num % 2 == 0){
	        $quant = $quant + 1;
	    }
	}
	echo "$quant valores pares\n";
?>