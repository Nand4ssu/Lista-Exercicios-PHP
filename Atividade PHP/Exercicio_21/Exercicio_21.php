<?php

$n1 = (int)$_POST['numero1'];

if($n1 < 2){

echo "Números que são menores que 2 não são primos!";

}else{

$primo = true;

for($i = 2; $i < $n1; $i++){
    if($n1 % $i == 0){
        $primo = false;
        break;
    }
}

if($primo){

echo"O número $n1 é primo";

}else{

echo"O número $n1 não é primo!!";    

}

}

?>