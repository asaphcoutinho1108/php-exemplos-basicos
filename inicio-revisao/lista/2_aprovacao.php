<?php

//funçao simples com retorno
function calcular(int $a, int $b, int $c, int $falta ): string {


    $media = ($a + $b + $c) /3;

if ($media >= 6.0 && $falta <= 15) {

    return "aprovado";

} else {
    return "reprovado";
}

}
echo "você foi " . calcular (1, 10, 7, 15)
?>

