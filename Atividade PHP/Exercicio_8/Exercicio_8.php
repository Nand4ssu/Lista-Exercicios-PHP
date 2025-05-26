<?php
$numeros = $_POST["numero1, numero2, numero3, numero4, numero5"];
$soma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}

$media = $soma / count($numeros);

echo "Soma dos números informados: $soma<br>";
echo "Média dos números informados: $media<br>";
?>
