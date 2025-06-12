<?php 
$hostname="localhost";
$bancodedados="banco_php";
$usuario="root";
$senha="";

$mysqli=new mysqli($hostname,$usuario,$senha,$bancodedados);
if($mysqli->conecct_errno){
    echo "falha ao conectar :(" . $mysqli->connect_errno.")". $mysqli->connect_errno;

}else
echo "conectado ao Banco de dados";

?>