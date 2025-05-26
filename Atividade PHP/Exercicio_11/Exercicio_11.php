<?php

$n1 = (int)$_POST['numero1'];
$n2 = (int)$_POST['numero2'];

$inicioIntervalo = min($n1, $n2);
$fimIntervalo = max($n1, $n2);

$soma = 0;

for($i = $inicioIntervalo + 1; $i < $fimIntervalo; $i++){
    echo $i . " ";
    $soma += $i;
}

echo "A soma total do intervalo é $soma";

?>