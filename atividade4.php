<?php
$valor1=4;
$valor2=1;
$valor3=210;
$ordem1= $valor3 > $valor2 && $valor3 > $valor1;
$ordemn2= $valor2 < $valor3 && $valor2 > $valor1;
$ordem3=  $valor1 < $valor2 && $valor1 < $valor3;

echo $ordem1;
echo "Os números são: ".$valor1 .", " .$valor2. "  e ".$valor3, "</br>";
echo "A ordem Decrescente de ", $valor1, ", ", $valor2, " e ",$valor3 , "</br>";

if ($valor3 > $valor2 && $valor3 > $valor1 && $valor2 < $valor3 && $valor2 > $valor1 && $valor1 < $valor2 && $valor1 < $valor3){
    echo "",$valor3, " ",$valor2, " ",$valor1; 
}
elseif($valor3 > $valor2 && $valor3 > $valor1 && $valor1 < $valor3 && $valor1 > $valor2 && $valor2 < $valor1 && $valor2 < $valor3){
    echo $valor3," ", $valor1," ", $valor2;
}
elseif($valor2 > $valor3 && $valor1 > $valor1 &&  $valor3 < $valor2 && $valor3 > $valor1 &&  $valor1 < $valor2 && $valor1 < $valor3){
    echo $valor2," ", $valor3," ", $valor1;
}
elseif($valor2 > $valor1 && $valor2 > $valor3 &&  $valor1 < $valor2 && $valor2 > $valor3 &&  $valor3 < $valor2 && $valor3 < $valor1){
    echo $valor2, " ",$valor1, " ",$valor3;
}
elseif($valor1 > $valor2 && $valor1 > $valor3 &&  $valor3 < $valor1 && $valor3 > $valor2 &&  $valor2 < $valor1 && $valor2 < $valor3){
    echo $valor1," ", $valor3, " ",$valor2;
}
else{
    echo $valor1, " ", $valor2, " ", $valor3;
}



?>