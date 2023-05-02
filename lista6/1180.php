<?php
  $n = readline();
  $x = array();
 
  $linha1 = readline();
  $var1 = explode(' ', $linha1);
 
  for($i = 0; $i < $n; $i++){
    $x[$i] = $var1[$i];
    settype($x[$i], "integer");
  }
 
  $menor = $x[0];
  $pos = 0;
 
  for($p = 0; $p < $n; $p++){
    if($menor > $x[$p]){
      $menor = $x[$p];
      $pos = $p;
    }
  }
 
  print("Menor valor: ".$menor."\n");
  print("Posicao: ".$pos."\n");
?>
1181
<?php
    $m = array();
   
    $l = readline();
    $o = readline();
    settype($o, "string");
    $summ = 0;
   
    for($i = 0; $i < 12; $i++){
      for($j = 0; $j < 12; $j++){
       
        $m[$i][$j] = readline();
   
        if($i == $l){
          $summ += $m[$i][$j];
        }
      }
    }
   
    if($o == "S"){
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }else if($o == "M"){
      $summ /= 12;
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }
   
?>
