<?php

// Função simples com retorno
function somar(float $a, float $b): float {
    return $a + $b;
}

// Exibindo resultado
echo somar (8, 15.6);
echo "<br><br>";

// Procedimento (Função sem retorno)
function saudacao($nome = "aluno") {
    echo "Olá, $nome! Bem-vindo(a) ao PHP. <br>";
}

// Exibindo a saudação
saudacao();
saudacao("Maria");

// Outro procedimento
function mostrarLinha() {
    echo "-------------------- <br>";
}

mostrarLinha();
