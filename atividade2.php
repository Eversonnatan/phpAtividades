<?php

$valor1 = 0;
$valor2 = 0;
$valor3= 0;
$valor = 20;
$valor1 = $valor % 10;
$valor2 = $valor % 5;
$valor3 = $valor % 2;

echo $valor. "</br>";
echo $valor1. "</br>";
echo $valor2. "</br>";
echo $valor3. "</br>";

if($valor1=0){
    echo $valor. "É Divisivel por 10</br>";
}
elseif($valor2 =0){
    echo $valor. "É Divisivel por 5</br>";
}
elseif($valor3 =0){
    echo $valor. "É Divisivel por 2</br>";
}
else{
    echo $valor. "</br>Não é Divisivel por 10 , por 5 e por 2";
}






?>