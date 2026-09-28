<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>

    <!-- Formulário -->
    <form method="post" action="">

        <!-- Campo nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <!-- Campo senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <!-- Botão de cadastro -->
        <button type="submit">Cadastrar</button>

    </form>

    <!-- Lógica para gravar as informações -->
    <?php 
    // Verifica se as informações vieram do Front-end
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Captura os valores enviados do Front-end
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Lógica para gravar os dados em um arquivo txt

        // O fopen significa "File open" ou abrir arquivo e a letra "a"
        // significa "append" ou acrescentar
        $arquivo = fopen('usuarios.txt', 'a');

        // Criar uma linha para guardar o nome e senha
        $linha = $nome . ';' . $senha . "\n";

        // fwrite ou "File write" habilita de fato a escrita ou criação da linha
        fwrite($arquivo, $linha);

        // Fecha o arquivo
        fclose($arquivo);

        // Mensagem ou feedback visual para o usuário
        echo "<p>Usuário cadastrado com sucesso!</p>";

    }
     
    ?>
    
</body>
</html>