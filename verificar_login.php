<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email_usuario'];
    $senha = $_POST['senha_usuario'];

    $sql = "SELECT * FROM cadastro WHERE email_usuario = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            if (password_verify($senha, $usuario['senha_usuario'])) {
                echo "Login bem-sucedido! Bem-vindo, " . $usuario['nome_usuario'];
                // Aqui pode iniciar a sessão
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "Usuário não encontrado!";
        }

        $stmt->close();
    } else {
        echo "Erro na consulta: " . $mysqli->error;
    }
}

$mysqli->close();
?>
