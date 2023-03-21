<?php
   $risada = readline();
   for($i = 0; $i < strlen($risada); $i++){
      $p = $risada[$i];
      
      if($p == "a" || $p == "e" || $p == "i" || $p == "o" || $p == "u"){
          $nova .= $risada[$i];
      }
   }
   $inversa = strrev($nova);
   
   if ($inverva == $nova){
       echo "S\n";
   }
   else{
       echo "N\n";
   }
?>