<?php

// Passando valores pela URL
// http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5

// Variável especial nativa do PHP "$_GET", usado para passar valores pela URL
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// Verifica se os valores foram passados corretamente
// A função isset() nativa do PHP verifica se os valores foram passados corretamente
if (isset($numero1) && ($numero2)) {
    // Converte os valores para inteiros
    $numero1 = (float)$numero1;
    $numero2 = (float)$numero2;

// Cálculos
$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

// Exibir resultados
echo "Soma: $soma <br>";
echo "Subtração: $subtracao <br>";
echo "Multiplicação: $multiplicacao <br>";
echo "Divisão: $divisao <br>";

} else {
    echo "Por favor, forneça os valores pela URL";
}

