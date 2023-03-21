<?php
    $p1 = readline();
    $p2 = readline();
    $p3 = readline();
    
    if ($p1 == "vertebrado" && $p2 == "mamifero" && $p3 == "onivoro"){
        echo "homem\n";
    } 
    if ($p1 == "vertebrado" && $p2 == "mamifero" && $p3 == "herbivoro"){
        echo "vaca\n";
    }
    if ($p1 == "vertebrado" && $p2 == "ave" && $p3 == "carnivoro"){
        echo "aguia\n";
    }
    if ($p1 == "vertebrado" && $p2 == "ave" && $p3 == "onivoro"){
        echo "pomba\n";
    }
    if ($p1 == "invertebrado" && $p2 == "inseto" && $p3 == "hematofago"){
        echo "pulga\n";
    }
    if ($p1 == "invertebrado" && $p2 == "inseto" && $p3 == "herbivoro"){
        echo "lagarta\n";
    }
    if ($p1 == "invertebrado" && $p2 == "anelideo" && $p3 == "hematofago"){
        echo "sanguessuga\n";
    }
    if ($p1 == "invertebrado" && $p2 == "anelideo" && $p3 == "onivoro"){
        echo "minhoca\n";
    }
   
?>