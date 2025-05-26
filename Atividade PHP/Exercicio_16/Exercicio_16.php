<?php

$a = 0;
$b = 1;

while(true){

$c = $a + $b;
    if($c > 500){
        break;
    }

echo "$c ";
$a = $b;
$b = $c;

}

?>