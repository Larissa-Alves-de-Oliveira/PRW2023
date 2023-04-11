<?php
	$num = readline();
	$cont;
	for($cont = 1; $cont <= $num; $cont++){
	    $n = explode(" ", fgets(STDIN));
	    $media = (($n[0] * 2) + ($n[1] * 3) + ($n[2] * 5)) / 10;
	    $media = number_format($media, 1, ".", "");
	    echo "$media\n";
	}
?>