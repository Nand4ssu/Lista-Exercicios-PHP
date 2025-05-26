<?php

$n1 = (int)$_POST['numero1'];

if($n1 > 0 && $n1 < 17){

$fatorando = 1;
$codigo= "";

for ($i = $n1; $i >= 1; $i--){

    $fatorando *= $i;
    $codigo .= $i . ($i > 1 ? "." : "");
    
}

echo"$n1! = $codigo = $fatorando";

}else{

    echo"Insira um valor válido.";

}
?>
