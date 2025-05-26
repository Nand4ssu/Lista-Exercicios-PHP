<?php

$n1 = (int)$_POST['numero1'];
$n2 = (int)$_POST['numero2'];

$inicioIntervalo = min($n1, $n2);
$fimIntervalo = max($n1, $n2);

for($i = $inicioIntervalo + 1; $i < $fimIntervalo; $i++){
    echo $i . " ";
}



?>