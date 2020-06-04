<?php
session_start();
require_once "banco-paciente.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Editar</title>
  </head>
  <body>
  	<header>

  		<?php  require_once "cabecalho.php";  ?>

  	</header>


  	<section>

  		<?php


  		      if (isset($_POST) && !empty($_POST)){
  		          $id = $_POST['id'];
  			        $cpf = trim(preg_replace("/[^0-9]/","",filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_NUMBER_INT)));
                $nome = preg_replace("/[^A-z Á-ú]/","",filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING));
                $telefone = trim(preg_replace("/[^0-9]/","",filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_NUMBER_INT)));
                $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
                $cep = trim(preg_replace("/[^0-9]/", "",filter_input(INPUT_POST,'cep',FILTER_SANITIZE_NUMBER_INT)));
                $cidade = preg_replace("/[^A-z Á-ú]/","",filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING));
                $estado = preg_replace("/[^A-z Á-ú]/","",filter_input(INPUT_POST,'estado',FILTER_SANITIZE_SPECIAL_CHARS));
                $bairro = preg_replace("/[;*'=]/","",filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_SPECIAL_CHARS));
                $rua = preg_replace("/[;*'=]/","",filter_input(INPUT_POST,'rua',FILTER_SANITIZE_SPECIAL_CHARS));
                $numero = trim(preg_replace("/[^0-9]/", "",filter_input(INPUT_POST,'numero',FILTER_SANITIZE_NUMBER_INT)));
        
                $complemento = preg_replace("/[;*'=]/","",filter_input(INPUT_POST,'complemento',FILTER_SANITIZE_SPECIAL_CHARS));

                if (strlen($cpf) < 11 or strlen($cpf) > 11 ){
          
                    $erro[] = "CPF inválido";
                }
                if (empty($nome) || strlen($nome) <= 3){
          
                      $erro[] = "Informar um nome com mais de 3 caracteres";
                }
                if (empty($telefone) || strlen($telefone) < 10 || strlen($telefone) > 11){
          
                    $erro[] = "Informar um telefone valido";
                }
                if (empty($numero) || strlen($numero) < 1) {
          
                    $erro[] = "Informar um numero valido";
                }
                if (empty($cep) || strlen($cep) < 8 || strlen($cep) < 8) {
          
                    $erro[] = "Informar um cep valido";
                }
                if (!empty($erro)) {

  			 	         $_SESSION['validacao'] = $erro;
  			           header('Location:paciente-form-alterar.php?id='.$id.' ');
  			        } else { 
  	                   if (alterarPaciente($conexao ,$id, $cpf, $nome, $telefone, $email, $cep, $cidade, $estado, $bairro, $rua, $numero, $complemento)){
  				               $_SESSION['success'] = 'Paciente Alterado com sucesso';
  	   				           header("Location:paciente-listar.php");
  		                  } else {
  					  
                            $_SESSION['danger'] = 'Erro na alteraçao de paciente';
  					                header("Location:paciente-listar.php");
  		                  }
  		          }  
 		        } else {
  	
  			         header("Location:paciente-listar.php");
  		      }
  ?>

</section>


<footer class="navbar fixed-bottom navbar-dark bg-dark">

	<?php  require_once "rodape.php";   ?>

</footer>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

