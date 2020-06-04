<?php
     
     session_start();
     require_once "banco-paciente.php";
     require_once "funcoes.php";
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
			
	
	<title>Cadastros</title>
</head>
<body>

	<header>

		<?php  require_once "cabecalho.php";  ?>
	</header>

	<section class="container">
		<?php mostraAlerta();?>
		<?php $pacientes = listarPaciente($conexao);?>

		<div class="table-responsive">
			<h4> Pacientes</h4>
			<a href="paciente-form.php" class="btn btn-primary float-right mb-4">Novo Paciente</a>
			<table class="table">

				<thead class="text-center" >
					<tr>
						<th scope="col">ID</th>
						<th scope="col">CPF</th>
						<th scope="col">Nome</th>
						<th scope="col">Telefone</th>
						<th scope="col">E-mail</th>
						<th scope="col">Cep</th>
						<th scope="col">Cidade</th>
						<th scope="col">Estado</th>
						<th scope="col">Bairro</th>
						<th scope="col">Numero</th>
						<th scope="col">Rua</th>
						<th scope="col">Complemento</th>
						<th scope="col">Ação</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($pacientes) > 0):?>            
						<?php foreach ($pacientes as $paciente) : ?>
							<tr>
								<td scope="row"><?= $paciente['id']?></td>
								<td class="col" ><?= $paciente['cpf']?></td>
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['nome']?></pre></td>
								<td class="col"><pre style="font-size:inherit;font-family:inherit;"><?=$paciente['telefone']?></td>
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['email']?></pre></td>
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['cep']?> </pre></td>
								<td class="col"><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['cidade']?></pre></td>
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['estado']?></pre></td>
								<td class="col"><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['bairro']?></pre></td>
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['numero']?></pre></td>
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['rua']?></pre></td>
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><?= $paciente['complemento']?></pre></td>          
								<td class="col" ><pre style="font-size:inherit;font-family:inherit;"><a href="paciente-form-alterar.php?id=<?=$paciente['id'] ?>"class="btn btn-success">Alterar </a></pre></td>
								<td class="col"> <pre style="font-size:inherit;font-family:inherit;"><a href="paciente-action-excluir.php?id=<?=$paciente['id'] ?>"class="btn btn-secondary">Excluir</a></pre></td>
							</tr>
						<?php endforeach ?>
					<?php endif;?>
						<?php 
						if (count($pacientes) <= 0):
							echo"Nenhum paciente cadastrado";
						endif;
						?>
				</tbody>
			</table>
		</div>
	</section>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<footer class="navbar fixed-bottom navbar-dark bg-dark">
			
			<?php  require_once "rodape.php";  ?>
	</footer>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		
</body>
</html>
