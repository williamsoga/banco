<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
<div class="container ">   <h2 class="caixa">login de usuario</h2> </div>
<div class="container cadastro">    
<form action="verificar_login.php" method="POST">
        <label for="email_usuario">Email: </label>
        <input type="email" id="email_usuario" name="email_usuario" required > <br> <br>
           
        <label for="senha_usuario"> Senha:</label>
        <input type="password" id="senha_usuario" name="senha_usuario" required > <br> <br>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>