<!--Formulário de inscrição em PHP-->
<!--Documento criado por Allyson de Olivera Brandão -->
<!doctype html>
<!--Linguagem-->
<html lang="pt-br">
<head>
<!--Caracteres-->
    <meta charset="utf-8">
    <!--Favicon-->
    <link rel="icon" href="img/php_40px.png" alt="Favicon">
    <!--Titulo do site-->
    <title>Formulário de inscrição</title>
    <!--name-->
    <meta name="author" content="Allyson">
    <!--Descrição do site-->
    <meta name="description" content="Formulário de Inscrição">
    <!--Visualização-->
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<!--Conteudo do site-->
<body>
    <h1>Formulário para incrição de competidores de natação</h1>
    <!--Formulário-->
    <form action="script.php" method="post">
        <!--Nome-->
        <p>Seu nome:<input type="text" name="nome"</p>
        <!--Idade-->
        <p>Sua idade: <input type="text" name="idade"</p>
        <!--Submit-->
        <p><input type="submit" value="Enviar"</p>
    </form>
</body>
</html>