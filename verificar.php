<?php 
require_once "banco-paciente.php";

$cpf = $_POST['cpf'];

$sql = "SELECT cpf FROM pacientes WHERE cpf = '$cpf'";
$query = mysqli_query($conexao,$sql);
$result = mysqli_fetch_assoc($query);
$retorno = array("cpf"=>$cpf, "resultado"=>$result);

echo json_encode($retorno);

?>