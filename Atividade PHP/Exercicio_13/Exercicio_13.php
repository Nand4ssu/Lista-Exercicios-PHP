<?php

$base = (int)$_POST['base'];
$expoente = (int)$_POST['expoente'];

$resultado = 1;

for($i = 1; $i <= $expoente; $i++){
    $resultado *= $base;
}

echo" $base elevado a $expoente é igual a: $resultado";

?>