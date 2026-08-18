<?php
$notas = [7.0, 7.1, 7.2, 7.3, 7.4];


$soma = 0;


$maiorNota = $notas[0];
$menorNota = $notas[0];


foreach ($notas as $nota) {
   
    $soma = $soma + $nota;

    
    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    
    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}


$mediaTurma = $soma / 5;


echo "A média da turma é: " . $mediaTurma . "<br>";
echo "A maior nota da turma foi: " . $maiorNota . "<br>";
echo "A menor nota da turma foi: " . $menorNota . "<br>";

?>