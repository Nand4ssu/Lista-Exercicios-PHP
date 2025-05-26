<?php

$n1 = (int)$_POST['numero1'];

$incrementado = 1;
$resultado = 0;

echo"Tabuada do número $n1 <br>";

do {

    $resultado = $n1 * $incrementado;
    echo "$n1 X $incrementado = $resultado <br>";
    $incrementado++;

}while($incrementado <= 10);


?>
