<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio";

try {
    // Tenta criar uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        // Se falhar mostra o erro
        throw new Exception("Falha na conexão: " .$conn->connect_error);
    }
    // Se tudo ocorrer bem e a conexão for estabelecida
    echo "Conexão realizada com sucesso!";
} catch (Exception $e) {
    // Mensagem de erro mais amigável
    echo "Erro ao conectar ao banco de dados" .$e->getMessage();
}

?>

<!-- Para criar o BD -->
<!-- CREATE DATABASE exercicio; -->

<!-- Para criar a Tabela -->
<!-- CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
); -->


