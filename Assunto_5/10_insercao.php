<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- HTML Para cadastro de Nome e e-mail -->
     <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Cadastrar</button>
     </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];


    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    // Tenta criar uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            // Se falhar mostra o erro
            throw new Exception("Falha na conexão: " .$conn->connect_error);
        }
    // Insere o resgistro no banco de dados
    $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";
    
    // Feedback visual (Para o usuário saber se deu certo a inserção)
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Cliente cadastrado com sucesso!</p>
        ";
    } else {
        echo "<p style='color: red;'>Erro ao cadastrar cliente: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>