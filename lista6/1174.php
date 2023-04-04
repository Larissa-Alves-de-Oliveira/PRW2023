<?php
	$num = array();
	$cont;
	
	for($cont = 0; $cont < 100; $cont++){
	  $num[$cont] = readline();
	}
	for($cont = 0; $cont < 100; $cont++){
	  if($num[$cont] <= 10){
	     $num[$cont] = number_format($num[$cont], 1, ".", "");
	    echo "A[$cont] = $num[$cont]\n";
	  }
	}
	
?>