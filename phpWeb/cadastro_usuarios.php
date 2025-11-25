<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastros usuarios</title>
</head>
<body>
    <header>
        
    </header>
    <h1>Cadastro de usuarios</h1>
    <form action="process_cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="Cadastrar!">
    </form>
</body>
</html>