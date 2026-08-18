<?php

$preco = 50.00;
$quantidade = (int) readline("Digite a quantidade: ");

$valorTotal = $preco * $quantidade;

if ($valorTotal >= 200) {
    $valorFinal = $valorTotal * 0.90; 
} else {
    $valorFinal = $valorTotal;        
}

echo "Valor final: R$ " . $valorFinal;

?>