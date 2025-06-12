<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title >formulario de cadastro</title>
</head>
<body>
    <h2 class="container linha-vertical"> cadastro de usuario</h2>
    <div class="container">
    <form action="cadastrar.php" method="POST" >
        <label for="nome_usuario"> Nome:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" required > <br> <br>

        <label for="contato_usuario"> Contato:</label>
        <input type="text" id="Contato_usuario" name="contato_usuario" required > <br> <br>

        <label for="email_usuario"> Email:</label>
        <input type="email" id="email_usuario" name="email_usuario" required > <br> <br>

        <label for="senha_usuario"> Senha:</label>
        <input type="password" id="senha_usuario" name="senha_usuario" required > <br> <br>

      <button type="submit">Cadastrar</button>

    </form>
    </div>
</body>
</html>