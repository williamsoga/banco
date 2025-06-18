<?php 
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Corrigido: nomes corretos e consistentes
        $nome_usuario = $_POST['nome_usuario'];
        $contato_usuario = $_POST['contato_usuario'];
        $email_usuario = $_POST['email_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        // Criptografar a senha
        $senha_hash = password_hash($senha_usuario, PASSWORD_DEFAULT);

        $sql = "INSERT INTO cadastro (nome_usuario, contato_usuario, email_usuario, senha_usuario)
                VALUES (?, ?, ?, ?)";

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("ssss", $nome_usuario, $contato_usuario, $email_usuario, $senha_hash);

            if ($stmt->execute()) {
               //$mensagem='<div class="message sucess"> Ususario cadastro com sucesso !</div>';//
                echo "<script> alert ('Usuario cadastrado com sucesso ! '); 
                window.location.href='login.php';
                </script>";
            } else {
                $mensagem='<div class "message error> Erro ao cadastrar :'.$stmt->error."</div>";
            }

            $stmt->close();
        } else {
            echo "Erro ao preparar a consulta: " . $mysqli->error;
        }
    }

    $mysqli->close();
?>
