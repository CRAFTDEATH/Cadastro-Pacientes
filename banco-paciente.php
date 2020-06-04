<?php 
require_once "conexao.php";

//função para retornar todos os pacientes
function listarPaciente($conexao){
//monta SQL
	$query = "SELECT * FROM pacientes";
//executa SQL
	$resultado = mysqli_query($conexao, $query);
	$pacientes = array();
//le resultado do SQL e coloca dentro da array
	while ($dados = mysqli_fetch_assoc($resultado)) {
		array_push($pacientes, $dados);
	}
//retorna array com os dados

	return $pacientes;
}

function buscarPaciente($conexao, $id) {
//monta SQL para pegar um paciente especifico
	$query = "SELECT * FROM pacientes WHERE id = $id";
//executa SQL
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
//função para inserir um paciente
function inserirPaciente($conexao, $cpf, $nome, $telefone, $email, $cep, $cidade,$estado ,$bairro ,$rua, $numero, $complemento){
	$cpf = mysqli_escape_string($conexao, $cpf);
	$nome = mysqli_escape_string($conexao, $nome);
	$telefone = mysqli_escape_string($conexao, $telefone);
	$email = mysqli_escape_string($conexao, $email);
	$cep = mysqli_escape_string($conexao, $cep);
	$cidade = mysqli_escape_string($conexao, $cidade);
	$estado = mysqli_escape_string($conexao, $estado);
	$bairro = mysqli_escape_string($conexao, $bairro);
	$rua = mysqli_escape_string($conexao, $rua);
	$numero = mysqli_escape_string($conexao, $numero);
	$complemento = mysqli_escape_string($conexao, $complemento);


//monta o SQL
	$query = "INSERT INTO pacientes (cpf, nome, telefone, email, cep, cidade, estado, bairro, rua, numero,complemento) values ('$cpf', '$nome',
	'$telefone','$email', '$cep', '$cidade', '$estado', '$bairro', '$rua', '$numero', '$complemento')";
//executa o SQL
	$resultadoInsercao = mysqli_query($conexao, $query);
//retorna resultado da execucao
	return $resultadoInsercao;
}
//função para alterar um paciente
function alterarPaciente($conexao, $id, $cpf, $nome, $telefone, $email, $cep, $cidade,$estado ,$bairro ,$rua, $numero, $complemento){
	$id = mysqli_escape_string($conexao,$id);
	$cpf = mysqli_escape_string($conexao, $cpf);
	$nome = mysqli_escape_string($conexao, $nome);
	$telefone = mysqli_escape_string($conexao, $telefone);
	$email = mysqli_escape_string($conexao, $email);
	$cep = mysqli_escape_string($conexao, $cep);
	$cidade = mysqli_escape_string($conexao, $cidade);
	$estado = mysqli_escape_string($conexao, $estado);
	$bairro = mysqli_escape_string($conexao, $bairro);
	$rua = mysqli_escape_string($conexao, $rua);
	$numero = mysqli_escape_string($conexao, $numero);
	$complemento = mysqli_escape_string($conexao, $complemento);


//monta o SQL
	$query = "UPDATE pacientes SET cpf = '$cpf', nome = '$nome', telefone = '$telefone', email = '$email', cep = '$cep', cidade = '$cidade', estado = '$estado', bairro = '$bairro', rua = '$rua', numero = '$numero',complemento = '$complemento' WHERE id = '$id' ";
//executa o SQL
	$resultadoAlteracao = mysqli_query($conexao, $query);
//retorna resultado da execucao
	

	return $resultadoAlteracao;
}
 //função para excluir um paciente
function removerPaciente($conexao, $id) {
	$id = mysqli_escape_string($conexao, $id);
//monta SQL
	$query = "DELETE FROM pacientes where id = $id";
//executa SQL
	$resultadoExclusao = mysqli_query($conexao, $query);
	return $resultadoExclusao;
}
function verificarPaciente($conexao, $cpf) {
//monta SQL para pegar um paciente especifico
	$sql = "SELECT cpf FROM pacientes WHERE cpf = '$cpf'";
//executa SQL
	$query = mysqli_query($conexao, $sql);
	
	//retorna array com os dados da consulta
	
	//pilha de array
	 return mysqli_num_rows($query);


}



?>