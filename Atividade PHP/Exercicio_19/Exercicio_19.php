<?php

$numeros = [-5, 16, 1001, 57, 18, 25, 991, 98, 44];
$qtd = count($numeros);


$menor = null;
$maior = null;
$soma = 0;
$valorValido = 0;

for($i = 0; $i < $qtd; $i++){
    $numero = $numeros[$i];

    if($numero >= 0 && $numero <= 1000){
        if($menor === null || $numero < $menor){
            $menor = $numero;
        }
        if($maior === null || $numero > $maior){
            $maior = $numero;
        }
        $soma += $numero;
        $valorValido++;
    }
}


if($valorValido > 0){

echo"Menor número: $menor <br>";
echo"Maior número: $maior <br>";
echo"Soma dos valores: $soma <br>";

}else{

echo"Nenhum número válido inserido.";

}

?>