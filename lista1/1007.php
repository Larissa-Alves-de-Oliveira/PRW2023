<?php 
    $n1 = readline();
    $n2 = readline();
    $n3 = readline();

    $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 5)) / 10;
    $media = number_format($media, 1, ".", "");

    echo "MEDIA = $media\n";
?>