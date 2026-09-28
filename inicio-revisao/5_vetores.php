<?php

// Vetor (array simples - "1 linha")
// $frutas = ["Maça", "Banana", "Uva"];
$frutas = [1 => "Maça", "Banana", "Uva"]; 

// Exibindo os valores com laço
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}

// Array (Linhas e colunas) com pilotos da F1

$matriz = [
    ["Max Verstappen", "Oscar Piastri", "Lando Norris"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Gabriel Bortoleto"]
];

echo "<br><br>";
echo "Lista de Pilotos de F1 (Dica: O 1º é o melhor.)
<br><br>";

// Exibindo os valores da matriz
// foreach ($matriz as $linha) {
//     foreach ($linha as $piloto) {
//         echo $piloto . " | ";
//  }
//  echo "<br>";
// }

// 1. Criamos um contador começando em 1
$posicao = 1; 

foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        // 2. Exibimos o piloto com o número atual (usando as chaves {} para não dar erro com o º)
        echo "[{$posicao}º] $piloto | ";
        
        // 3. Somamos +1 para o próximo piloto da sequência
        $posicao++; 
    }
    echo "<br>";
}