<?php
	$cont;
	$quant = 0;
	$calc = 0;
	for($cont = 1; $cont <= 6; $cont++){
	    $num = readline();
	    if($num > 0){
	        $quant = $quant + 1;
	        $calc += $num;
	    }
	}
	$media = $calc / $quant;
    $media = number_format($media, 1, ".", "");
	echo "$quant valores positivos\n";
	echo "$media\n";
?>