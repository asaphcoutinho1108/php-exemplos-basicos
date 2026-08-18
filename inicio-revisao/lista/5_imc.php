<?php


function calcularIMC(float $peso, float $altura): float {
  
    $imc = $peso / ($altura * $altura);
    return $imc;
}


$meuPeso = 75.5;    
$minhaAltura = 1.75; 


$resultadoIMC = calcularIMC($meuPeso, $minhaAltura);


echo "Seu IMC é: " . number_format($resultadoIMC, 2) . "<br>";

if ($resultadoIMC < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($resultadoIMC >= 18.5 && $resultadoIMC < 25.0) {
    echo "Classificação: Peso normal";
} elseif ($resultadoIMC >= 25.0 && $resultadoIMC < 30.0) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}

?>