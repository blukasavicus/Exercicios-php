<?php

function potencia($base, $expoente) {
    $resultado = pow($base, $expoente);

    return $resultado;
}
$base = 6;
$expoente = 3;
echo "O resultado de $base elevado a $expoente é: " . potencia($base, $expoente);

?>