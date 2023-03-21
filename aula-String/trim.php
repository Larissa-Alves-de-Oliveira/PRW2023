<?php
    //rein - remove espaços do início ou fim 
    //strlen - remove o número de caracteres
    $str = " IFSP Birigui ";
    echo "Tamanho: ".strlen($str)."<br>";
    $str = trim($str);
    echo "Tamanho: ".strlen($str)."<br>";
?>