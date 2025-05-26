<?php

do{

$nota = $_POST['nota'];


if ($nota >= 0 && $nota <= 10){

    echo"Nota válida: $nota<br>";
    break;

}else{

    echo"Valor inválido. Por favor, informe um valor de 0 á 10 <br>";
    break;
    
}
}while(true);


?>