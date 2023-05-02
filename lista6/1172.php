<?php
  $x = array();
for($n = 0; $n < 10; $n++){
 fscanf(STDIN, "%d", $x[$n]);
 
 if($x[$n] <= 1){
   $x[$n] = 1;
 }
}