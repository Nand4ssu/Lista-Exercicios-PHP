<?php

$populacaoA = 80000;
$populacaoB = 200000;
 
$taxaCrescimentoA = 0.03;
$taxaCrescimentoB = 0.015;

$anoRestantes = 0;
  
do{

    $populacaoA = $populacaoA * $taxaCrescimentoA;
    $populacaoB = $populacaoB * $taxaCrescimentoB;
    $anoRestantes++;

}while($populacaoA <= $populacaoB);

 
echo "Restam $anoRestantes anos para a população A ultrapassar ou igualar a população B <br>";
echo "População final do país A: $populacaoA <br>";
echo "População final do país B: $populacaoB";
 
?>