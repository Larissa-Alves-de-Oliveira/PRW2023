<?php
    $pedido = explode(" ", fgets(STDIN));
    
    if ($pedido[0] == 1){
        $preco = 4.00 * $pedido[1];
        $preco = number_format($preco, 2, ".", "");
        echo "Total: R$ $preco\n";
    }
    
     if ($pedido[0] == 2){
        $preco = 4.50 * $pedido[1];
        $preco = number_format($preco, 2, ".", "");
        echo "Total: R$ $preco\n";
    }
    
    if ($pedido[0] == 3){
        $preco = 5.00 * $pedido[1];
        $preco = number_format($preco, 2, ".", "");
        echo "Total: R$ $preco\n";
    }
    
    if ($pedido[0] == 4){
        $preco = 2.00 * $pedido[1];
        $preco = number_format($preco, 2, ".", "");
        echo "Total: R$ $preco\n";
    }
    
    if ($pedido[0] == 5){
        $preco = 1.50 * $pedido[1];
        $preco = number_format($preco, 2, ".", "");
        echo "Total: R$ $preco\n";
    }
?>