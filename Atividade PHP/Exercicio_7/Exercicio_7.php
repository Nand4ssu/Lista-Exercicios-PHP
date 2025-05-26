<?php
$numeros = $_POST["numero1, numero2, numero3, numero4, numero5"];
$maior = $numeros[0];

for ($i = 1; $i < count($numeros); $i++) {
    $maior = max($maior, $numeros[$i]);
    //A função max() retorna o maior valor entre dois ou mais valores.
}

echo "O maior número informado foi: $maior";
?>
