<?php
    //$_GET obtém dados do formulário enviado via GET
    //$_POSTR obtém dado do formulário enviado vis POST
    /*nome entre '' deve ser igual ao aname do input 
    definido no formulário*/
    $nome = $_GET ['nome'];
    $idade = $_GET['idade'];
    echo "<h1>$nome</h1>";
    echo "<h2>$idade</h2>";

    if(strlen($nome) < 20){
        echo "O nome deve conter no mínimo 20 caracteres";
     }
     if($idade > 18){
        echo "Aluno maior de idade!<br>";
     } else
     {
        echo "Aluno menor de idade!<br>";
     }
?>
<!--Código html-->
 <a href='form.html'><button>Voltar</button></a>

 