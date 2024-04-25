<?php

function imc($peso, $altura){
    $imc = $peso/ ($altura * $altura);
    
    return round($imc, 2);
}

$peso = 70; 
$altura = 1.75; 
echo "O seu IMC é: " . imc($peso, $altura);

?>