<?php
$altura = 165;
$alturaM= 0;
$idadeM= 0;
$sexo1= 0;
$sexo2=0;
$alturaMe=0;




for($i=0; $i<3; $i++){
    echo "</br>Qual sua altura: ";
    echo "Qual sua idade";
    echo "Qual seu sexo? </br> 1- Masculino </br> 2- Feminino";
    
    $altura = $alturaM;
    $menorAlt =0;
    $maiorAlt =0;


    if($altura > $alturaM){
        $altura = $maiorAlt;
        echo $maiorAlt;
    }
    elseif($altura < $alturaM){
        $alturaM = $menorAlt;
        echo $menorAlt;
    }
    else{}

    $altura++;
}



?>