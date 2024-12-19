<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado de processamento</h1>
    <main>
        <?php 
            $nome = $_REQUEST["nome"] ?? "usuario desconhecido";
            $sobrenome = $_REQUEST["sobrenome"] ?? "?";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>!";
            echo "<p>Este aqui o meu site $nome!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior!</a></p>
    </main>
    </header>
</body>
</html>