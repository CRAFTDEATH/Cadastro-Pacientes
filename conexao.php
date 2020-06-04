<?php 

$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$db = "sus";

$conexao = mysqli_connect($servidor,$usuario,$senha,$db);
mysqli_set_charset($conexao,"utf8");

if(!$conexao){
	
	echo "ERRO = " . mysqli_connect_error();
}
?>