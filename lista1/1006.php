<?php
    $n1 = readline();
    $n2 = readline();

    $media = (($n1 * 3.5) + ($n2 * 7.5)) / 11;
    $media = number_format($media, 5, ".", "");

    echo "MEDIA = $media\n";
?>