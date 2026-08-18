# PHP Básico — Sequência de Estudos

Este repositório reúne uma sequência progressiva de exemplos e desafios em PHP, criada para alunos do curso Técnico em Desenvolvimento de Sistemas que estão tendo o primeiro contato com a linguagem. O objetivo é construir, passo a passo, a base necessária para o desenvolvimento de um projeto completo (ex: sistema de artistas e músicas), partindo de conceitos simples até chegar em formulários, banco de dados, upload de arquivos e sessões.

## Como usar

Cada arquivo é independente e pode ser executado isoladamente em um ambiente com PHP e servidor local (ex: XAMPP/WAMP com Apache + MySQL). Basta colocar a pasta no diretório do servidor (`htdocs`) e acessar os arquivos pelo navegador, na ordem sugerida abaixo.

Os arquivos que dependem de banco de dados (a partir do nº 9) esperam um banco chamado `exercicio`. Ajuste `$servername`, `$username`, `$password` e `$dbname` conforme o ambiente de cada aluno.

## Sequência de conteúdos

| # | Arquivo | Conceito principal |
|---|---------|---------------------|
| 1 | `1_helloworld.php` | Sintaxe básica, tags `<?php ?>` e `echo` |
| 2 | `2_opera_variaveis.php` | Variáveis, `$_GET`, operações matemáticas |
| 2b | `2b_opera_variaveis.php` | Mesma lógica, integrada a HTML (calculadora simples) |
| 3 | `3_formulario.php` | Formulário HTML + recebimento via `$_POST` |
| 4 | `4_condicionais.php` / `4b_bem_vindo.php` | Estruturas condicionais (`if/else`), `header()` para redirecionamento |
| 5 | `5_cadastro.php` | Formulário de cadastro (nome e senha) |
| 5a | `5a_desafio1.php` / `5a_desafio1.md` | **Desafio 1:** verificador de maioridade com gravação em arquivo `.txt` |
| 6 | `6_login.php` | Formulário de login |
| 7 | `7_arrays.php` | Arrays associativos, `foreach`, exibição em tabela HTML |
| 8 | `8_form_validacao.php` | Validação de dados de formulário |
| 9 | `9_conexao_bd.php` | Conexão com banco de dados (MySQLi) |
| 10 | `10_insercao.php` | Inserção de dados no banco (`INSERT`) |
| 10a | `10a_desafio2.php` / `10a_desafio2.md` | **Desafio 2:** cadastro de produtos com validação e persistência no banco |
| 11 | `11_listar.php` | Listagem de dados do banco (`SELECT`) |
| 12 | `12_atualizar.php` | Atualização de registros via `id` na URL (`UPDATE`) |
| 13 | `13_exclusao.php` | Exclusão de registros via `id` na URL (`DELETE`) |
| 14 | `14_upload.php` | Upload de arquivos/imagens |
| 15a-15c | `15a_sistema.php`, `15b_restrita.php`, `15c_logout.php` | Sessões (`$_SESSION`), login, página restrita e logout |
| 15d | `15d_login.php`, `15d_perfil.php`, `15d_logout.php` / `15d_desafio3.md` | **Desafio 3:** sessão personalizada (nome + cor de preferência) |

## Estrutura pedagógica

A sequência segue uma progressão intencional:

1. **Fundamentos da linguagem** (1–2b): sintaxe, variáveis, `$_GET`.
2. **Formulários e fluxo de dados** (3–8): `$_POST`, condicionais, arrays, validação.
3. **Persistência em banco de dados** (9–13): CRUD completo com MySQLi.
4. **Recursos avançados** (14–15d): upload de arquivos e controle de sessão/autenticação.

Os desafios (`5a`, `10a`, `15d`) servem como pontos de verificação de aprendizagem, aplicando os conceitos vistos até aquele momento sem introduzir código novo pronto — o aluno deve produzir a solução a partir do enunciado em Markdown.

## Observações

- Os exemplos priorizam **simplicidade didática** sobre boas práticas de produção (sem frameworks, sem PDO/prepared statements na maioria dos casos, senhas em texto puro em alguns exemplos). O objetivo é fixar a lógica da linguagem antes de introduzir segurança e arquitetura mais robustas, temas tratados em projetos posteriores.
- Recomenda-se apresentar aos alunos, em algum momento após o item 9, a diferença entre esses exemplos simplificados e práticas seguras (prepared statements, hashing de senha, sanitização de entrada), para que não levem os padrões básicos como recomendação final.
