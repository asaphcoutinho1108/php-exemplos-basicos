<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - status Codes</title>
</head>

<body>
    <h1>Cadastro de alunos (Com status Codes)</h1>
    
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label for="idade">Idade:</label>
        <input type="text" name="idade" required><br><br>
        
        <button type="submit">Enviar</button>
        
    </form>

<hr>

<?php
// $_SERVER é uma variável superglobal do PHP que contém várias informações sobre requisições feitas ao servidor. Neste caso verifica se o método utilizado foi POST e se verdade captura as informações (Nome e idade)
if($_SERVER['REQUEST_METHOD']== 'POST') {
    // Pega os valores digitados no formulário (Pelo usuário)
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Tratativa dos erros por "Status Code"

    // Erro por parte do usuário (Faixa 400 - Não preencheu Nome ou Idade)
    if($nome == '' || $idade == '') {
        http_response_code(400);
        echo "<h2>Status 400 - Faltou preenchar nome ou idade!</h2>";

    // Erro por parte do usuário (Faixa 400 - Usuário preencheu errado, por exemplo em vez de: "20" escreveu "vinte")
    // }elseif(!is_numeric($idade)) {
    //     http_response_code(400);
    //     echo "<h2>Status 400 - Idade precisa ser um número!</h2>";

    // Erro por parte do usuário (Faixa 400 - Usuário preencheu errado, por exemplo em vez de: "20" escreveu "vinte")
    }elseif(!ctype_digit(strval($idade))) {
        http_response_code(400);
        echo "<h2>Status 400 - Idade precisa ser um número!</h2>";


    // Resposta para quando tudo foi bem (Cadastro feito com sucesso) 
    } else {
        http_response_code(201);
        echo "<h2>Status 201 - Criado: $nome, $idade anos!</h2>";
    }

} else {
    // Status 200 - Usuário entrou na página mas ainda não enviou
    http_response_code(200);
    echo "<h2>Status 200 - Preencha o fomulário acima e envie</h2>";
}

?>
    
</body>
</html>