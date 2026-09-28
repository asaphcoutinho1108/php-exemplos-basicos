<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Maioridade</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" name="ano_nascimento" placeholder="AAAA" required><br>

        <button type="submit">Verificar</button>
    </form>

  <?php
    // Verifica se o formulário foi enviado com o método POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe e armazena os dados do formulário
        $nome = $_POST['nome'];
        $ano_nascimento = (int)$_POST['ano_nascimento'];

        // Calcula a idade subtraindo o ano de nascimento do ano atual
        $idade = date('Y') - $ano_nascimento;

        // Verifica se a idade é maior ou igual a 18
        if ($idade >= 18) {
            echo "<h2>Acesso permitido, $nome! Idade atual: $idade.</h2>";

            // Abre o arquivo log_acessos.txt no modo de adição ('a')
            $arquivo = fopen('log_acessos.txt', 'a');
            // Monta a linha a ser salva no arquivo
            $linha = "Nome: $nome, Idade: $idade\n";
            // Escreve a linha no arquivo e o fecha
            fwrite($arquivo, $linha);
            fclose($arquivo);
        } else {
            // Exibe mensagem de acesso negado se for menor de idade
            echo "<h2>Acesso negado, $nome! Idade atual: $idade.</h2>";
        }

        // Executa o refresh da página após 5 segundos para limpar a mensagem
        echo '<meta http-equiv="refresh" content="5;url='.$_SERVER['PHP_SELF'].'">';
    }
    ?>
</body>
</html>