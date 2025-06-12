<?php 
    include 'conexao.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $nome_usario=$_POST['nome_usuario'];
    $contato_usario=$_POST['contato_usuario'];
    $email_usario=$_POST['email_usuario'];
    $senha_usario=$_POST['senha_usuario'];

    $senha_hash=password_hash($senha_usario,PASSWORD_DEFAULT);

    $sql="INSERT INTO cadastro (nome_usuario, contato_usuario, email_usuario, senha_usuario)
    
    VALUES (?,?,?,?)";
    
    if($stmt=$mysqli-> prepare ($sql)){
        $stmt-> bind_param("ssss",$nome_usuario,$contato_usuario,$email_usuario,$senha_hash);
      
        if($stmt-> execute()) {
            echo"usuario cadastrado com sucesso !";

        }else {
            echo "erro ao cadastrar :". $stmt->error;
        }

        $stmt->close();

    }else{
     
        echo "erro ao preparar a consulta:".$mysqli->error;
    }
    
}
$mysqli->close();
?>
