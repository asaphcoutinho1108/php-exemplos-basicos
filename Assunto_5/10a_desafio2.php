<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <!-- HTML do formulário de cadastro de produtos -->
    <form action="" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" min="1" step="0.01" required>

        <button type="submit">Cadastrar Produto</button>
     </form>

     <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];


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
    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";
    
    // Feedback visual (Para o usuário saber se deu certo a inserção)
    if ($conn->query($sql) === TRUE) {
        echo "<p id='mensagem' style='color: green;'>Produto cadastrado com sucesso!</p>
        ";
    } else {
        echo "<p id='mensagem' style='color: red;'>Erro ao cadastrar produto: " . $conn->error . "</p>";
    }
}
?>
<script>
    const mensagem = document.getElementById('mensagem');
    if (mensagem) {
        setTimeout(() => mensagem.remove(), 3000);
    }
</script>
</body>
</html>