<?php
   $n = readline();
   $resultado = 1;
   for ( $i = 0;$n > 0 && $n < 13; $n--){
      $resultado = $resultado * $n;
  }
  echo "$resultado\n";
?>