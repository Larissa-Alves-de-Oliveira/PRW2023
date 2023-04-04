<?php
	$num = array();
	$cont;
	
	for($cont = 0; $cont < 20; $cont++){
	  $num[$cont] = readline();
	}
	
	for($cont = 0; $cont < 10; $cont++){
	  $troca = $num[$cont];
	  $num[$cont] = $num[19 - $cont];
	  $num[19 - $cont] = $troca;
	}
	for ($cont = 0; $cont < 20; $cont++){ 
		echo "N[$cont] = $num[$cont]\n";
	}
	
?>