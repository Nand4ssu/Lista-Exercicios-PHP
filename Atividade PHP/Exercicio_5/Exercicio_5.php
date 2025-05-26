<?php

$populacaoA = $_POST['populacaoA'];
$populacaoB = $_POST['populacaoB'];
 
$taxaCrescimentoA = $_POST['taxaA'];
$taxaCrescimentoB = $_POST['taxaB'];

$anoRestantes = 0;

do {

    $populacaoA = $populacaoA * $taxaCrescimentoA;
    $populacaoB = $populacaoB * $taxaCrescimentoB;
    $anoRestantes++;

}while($populacaoA <= $populacaoB);
 
echo "Restam $anoRestantes anos para a população A ultrapassar ou igualar a população B <br>";
echo "População final do país A: $populacaoA <br>";
echo "População final do país B: $populacaoB";
echo "<a href='index.html'>Realizar a operação novamente.</a>";
 
?>