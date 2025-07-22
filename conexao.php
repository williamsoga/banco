<?php 
$hostname="sql107.infinityfree.com";
$bancodedados="banco_php";
$usuario="if0_38999262";
$senha="eWmDFx5l27";

$mysqli= new mysqli($hostname,$usuario,$senha,$bancodedados);

if($mysqli-> connect_errno){
    echo "falha ao conectar :(" . $mysqli->connect_errno.")". $mysqli->connect_errno;

}else
echo "conectado ao Banco de dados";

?>