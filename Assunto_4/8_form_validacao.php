<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com validação</title>
</head>
<body>
    <form action="" method="post">

        <label for="nome">Nome</label>
        <input type="text" name="nome" required> <br>

        <label for="email">E-mail</label>
        <input type="email" name="email" required> <br>

        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" required></textarea> <br>

        <button type="submit">Enviar</button>

    </form>

    <!-- Parte da lógica -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] =='POST') {
        // Recebe os dados
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        // Validação dos campos (Se estão vazios e se e-mail é válido)
        if (!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($mensagem) ) {
            echo "<p style='color: Darkgreen;'>Feedback enviado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Preencha todos os campos corretamente!</p>";     
        }
    }     
    ?>
</body>
</html>