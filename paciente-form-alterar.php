<?php  
   
    session_start();
    require_once "banco-paciente.php";
    $id = $_GET['id'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">

            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');

                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
            $(document).ready(function(){
                $("#cpf").mask("000.000.000-00");
                $("#telefone").mask("(00) 0000-00009");
                $("#numero").mask("0000000000");
                $("#cep").mask("00000-000");

                $("#rua").mask("saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",{
                    translation:{
                        'a':{

                                pattern:/[A-z Á-ź]/
                        },
                        's':{
                            
                                pattern:/[A-z Á-ź]/
                        }
                    }
                })
                $("#rua").keyup(function(){

                    if ($("#rua").val().indexOf("[") != -1){

                        let sub = $("#rua").val().replace("[","");             
                        $("#rua").val(sub);                   
                    }
                    if ($("#rua").val().indexOf("]") != -1){

                       let sub = $("#rua").val().replace(/]/g,"");             
                       $("#rua").val(sub);             
                    }
                    if ($("#rua").val().indexOf("^") != -1){

                        let sub = $("#rua").val().replace("^","");             
                        $("#rua").val(sub);                   
                    }
                    if ($("#rua").val().indexOf("\\") != -1){

                        let sub = $("#rua").val().replace(/\\/g,"");             
                        $("#rua").val(sub);                   
                    }
                    if ($("#rua").val().indexOf("_") != -1){

                        let sub = $("#rua").val().replace(/_/g,"");             
                        $("#rua").val(sub);                   
                    }
                    if ($("#rua").val().indexOf("`") != -1){

                        let sub = $("#rua").val().replace(/`/g,"");             
                        $("#rua").val(sub);                   
                    }
                })
                $("#complemento").mask("saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",{
                    translation:{
                        'a':{

                            pattern:/[A-z Á-ź]/
                        },
                    
                        's':{
                           
                            pattern:/[A-z Á-ź]/
                        }

                   }
                })
                $("#complemento").keyup(function(){

                     if ($("#complemento").val().indexOf("[") != -1){

                        let sub = $("#complemento").val().replace("[","");             
                        $("#complemento").val(sub);                   
                     }
                     if ($("#complemento").val().indexOf("]") != -1){

                         let sub = $("#complemento").val().replace(/]/g,"");             
                         $("#complemento").val(sub);             
                     }
                     if ($("#complemento").val().indexOf("^") != -1){
 
                         let sub = $("#complemento").val().replace("^","");             
                         $("#complemento").val(sub);                   
                     }
                     if ($("#complemento").val().indexOf("\\") != -1){
 
                         let sub = $("#complemento").val().replace(/\\/g,"");             
                         $("#complemento").val(sub);                   
                     }
                     if ($("#complemento").val().indexOf("_") != -1){
 
                         let sub = $("#complemento").val().replace(/_/g,"");             
                         $("#complemento").val(sub);                   
                     }
                     if ($("#complemento").val().indexOf("`") != -1){
 
                         let sub = $("#complemento").val().replace(/`/g,"");             
                         $("#complemento").val(sub);                   
                    }
                })
                $("#nome").mask("saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",{
                     translation:{
                        'a':{

                            pattern:/[A-z Á-ź]/
                         },
                        's':{
                           
                            pattern:/[A-z Á-ź]/
                        }
                    }
                })
                $("#nome").keyup(function(){

                    if ($("#nome").val().indexOf("[") != -1){

                        let sub = $("#nome").val().replace("[","");             
                        $("#nome").val(sub);                   
                    }
                    if ($("#nome").val().indexOf("^") != -1){

                        let sub = $("#nome").val().replace("^","");             
                        $("#nome").val(sub);                   
                    }
                    if ($("#nome").val().indexOf("]") != -1){

                        let sub = $("#nome").val().replace(/]/g,"");             
                        $("#nome").val(sub);                   
                    }
                    if ($("#nome").val().indexOf("\\") != -1){

                        let sub = $("#nome").val().replace(/\\/g,"");             
                        $("#nome").val(sub);                   
                    }
                    if ($("#nome").val().indexOf("_") != -1){

                        let sub = $("#nome").val().replace(/_/g,"");             
                        $("#nome").val(sub);                   
                    }
                    if ($("#nome").val().indexOf("`") != -1){

                        let sub = $("#nome").val().replace(/`/g,"");             
                        $("#nome").val(sub);                   
                    }
                })
                $("#cidade").mask("saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",{

                    translation:{
                        'a':{

                            pattern:/[A-z Á-ź]/
                        },

                        's':{
                            pattern:/[A-z Á-ź]/
                        }
                    }
                })
                $("#cidade").keyup(function(){

                    if ($("#cidade").val().indexOf("[") != -1){

                        let sub = $("#cidade").val().replace("[","");             
                        $("#cidade").val(sub);                   
                    }
                    if ($("#cidade").val().indexOf("]") != -1){

                        let sub = $("#cidade").val().replace(/]/g,"");             
                        $("#cidade").val(sub);             
                    }
                    if ($("#cidade").val().indexOf("^") != -1){

                        let sub = $("#cidade").val().replace("^","");             
                        $("#cidade").val(sub);                   
                    }
                    if ($("#cidade").val().indexOf("\\") != -1){

                        let sub = $("#cidade").val().replace(/\\/g,"");             
                        $("#cidade").val(sub);                   
                    }
                    if ($("#cidade").val().indexOf("_") != -1){

                        let sub = $("#cidade").val().replace(/_/g,"");             
                        $("#cidade").val(sub);                   
                    }
                    if ($("#cidade").val().indexOf("`") != -1){

                        let sub = $("#cidade").val().replace(/`/g,"");             
                        $("#cidade").val(sub);                   
                    }
                })
             
                $("#estado").mask("saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",{
                    translation:{
                        'a':{

                            pattern:/[A-z Á-ź]/
                        },

                        's':{
                            
                            pattern:/[A-z Á-ź]/
                        }
                    }
                })
                $("#estado").keyup(function(){

                    if ($("#estado").val().indexOf("[") != -1){

                        let sub = $("#estado").val().replace("[","");             
                        $("#estado").val(sub);                   
                    }
                    if ($("#estado").val().indexOf("]") != -1){

                        let sub = $("#estado").val().replace(/]/g,"");             
                        $("#estado").val(sub);             
                    }
                    if ($("#estado").val().indexOf("^") != -1){

                        let sub = $("#estado").val().replace("^","");             
                        $("#estado").val(sub);                   
                    }
                    if ($("#estado").val().indexOf("\\") != -1){

                        let sub = $("#estado").val().replace(/\\/g,"");             
                        $("#estado").val(sub);                   
                    }
                    if ($("#estado").val().indexOf("_") != -1){

                        let sub = $("#estado").val().replace(/_/g,"");             
                        $("#estado").val(sub);                   
                    }
                    if ($("#estado").val().indexOf("`") != -1){

                        let sub = $("#estado").val().replace(/`/g,"");             
                        $("#estado").val(sub);                   
                    }
                })

                $("#bairro").mask("saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",{
                     translation:{
                        'a':{

                            pattern:/[A-z Á-ź]/
                        },

                        's':{
                            
                            pattern:/[A-z Á-ź]/
                        }
                    }
                })
                $("#bairro").keyup(function(){

                    if ($("#bairro").val().indexOf("[") != -1){

                        let sub = $("#bairro").val().replace("[","");             
                        $("#bairro").val(sub);                   
                    }
                    if ($("#bairro").val().indexOf("]") != -1){

                        let sub = $("#bairro").val().replace(/]/g,"");             
                        $("#bairro").val(sub);             
                    }
                    if ($("#bairro").val().indexOf("^") != -1){

                        let sub = $("#bairro").val().replace("^","");             
                        $("#bairro").val(sub);                   
                    }
                    if ($("#bairro").val().indexOf("\\") != -1){

                        let sub = $("#bairro").val().replace(/\\/g,"");             
                        $("#bairro").val(sub);                   
                    }
                    if ($("#bairro").val().indexOf("_") != -1){

                        let sub = $("#bairro").val().replace(/_/g,"");             
                        $("#bairro").val(sub);                   
                    }
                    if ($("#bairro").val().indexOf("`") != -1){

                        let sub = $("#bairro").val().replace(/`/g,"");             
                        $("#bairro").val(sub);                   
                    }
                })
                $("#email").mask("saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",{
                    translation:{
                        'a':{
                            pattern:/[A-z0-9.@_-]/
                        },
                        's':{
                            pattern:/[A-z]/
                        }
                    }
                });

                $("#form").validate({
                   rules: {
                        cpf: {
                            
                            required: true,
                            minlength: 14
                        },
                        nome:{
                            minlength:3,
                            required: true                 
                        },
                        telefone:{
                            
                            required: true,
                            minlength: 14
                        },
                        email:{
                           
                            required: true
                        }
                    },
                    messages: {

                        cpf: {
                        
                            minlength: jQuery.validator.format("Por favor, fornessa 11 digitos")
                        },
                        telefone:{
                        
                            minlength: jQuery.validator.format("Por favor, fornessa pelo menos 8 digitos com dd")
                        }
                    }
                }) 
                 function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
                }
            
                 $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                        

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
            })       
    </script>
        <title>Atualização de cadastro!</title>
  </head>
  <body>
    <header>

        <?php require_once "cabecalho.php";?>
    </header>
    <?php 
   
        if(!empty($_SESSION['validacao'])){
        
            $validacao[] = $_SESSION['validacao']; 

            echo"<ul>";
            for($i = 0;$i < count($validacao[0]);$i++){
            
                echo"<li>".$validacao[0][$i]."</li>";
            }
            
            echo"</ul>";
            unset($_SESSION['validacao']);
        } 
    ?>

    <?php $pacientes = buscarPaciente($conexao, $id); ?>
    <div class="container">
    	<section>

    		<h4 class="pb-2 mt-3">Novo Paciente</h4>
    		<form action="paciente-action-editar.php" method="post" class="needs-validation" id="form">
    			<input type="hidden" id="txtId" name="id" value="<?= $pacientes['id'] ?>">
    			<div class="form-group">
    				<label class="control-label">CPF</label>
    				<input type="text" name="cpf"  class="form-control" required="" value="<?=$pacientes['cpf']?>" placeholder="Digite o cpf aqui"  maxlength="11" id="cpf" readonly="" >
    				<div class="invalid-feedback">Por favor, informe um CPF.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label">Nome</label>
    				<input type="text" name="nome"  class="form-control" required="" value="<?=$pacientes['nome']?>" placeholder="Digite o nome aqui" id="nome" minlength="3" maxlength="50">
    				<div class="invalid-feedback">Por favor, informe um CPF.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label">Telefone</label>
    				<input type="text" name="telefone"  class="form-control" required="" value="<?=$pacientes['telefone'] ?>" placeholder="Digite o telefone aqui" id="telefone" minlength="10" maxlength="11">
    				<div class="invalid-feedback">Por favor, informe um CPF.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label">E-mail</label>
    				<input type="email" name="email"  class="form-control" required="" value="<?=$pacientes['email'] ?>" placeholder="Digite o email aqui" maxlength="50" id="email" >
    				<div class="invalid-feedback">Por favor, informe um CPF.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>

    			<div class="form-group">
    				<label class="control-label">CEP</label>
    				<input type="text" name="cep"  class="form-control" required="" value="<?=$pacientes['cep'] ?>" placeholder="Digite o cep aqui" id="cep" maxlength="8"  >
    				<div class="invalid-feedback">Por favor, informe um .</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>

    			<div class="form-group">
    				<label class="control-label">Estado</label>
    				<input type="text" name="estado" class="form-control" required="" value="<?=$pacientes['estado'] ?>" placeholder="Digite o estado aqui" id="estado" maxlength="50" >
    				<div class="invalid-feedback">Por favor, informe um estado.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>

    			<div class="form-group">
    				<label class="control-label">Cidade</label>
    				<input type="text" name="cidade"  class="form-control" required="" value="<?=$pacientes['cidade'] ?>" placeholder="Digite a cidade aqui" id="cidade" maxlength="50" >
    				<div class="invalid-feedback">Por favor, informe uma cidade.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>

    			<div class="form-group">
    				<label class="control-label">Bairro</label>
    				<input type="text" name="bairro"  class="form-control" required="" value="<?=$pacientes['bairro'] ?>" placeholder="Digite o bairro  aqui" id="bairro" maxlength="50">
    				<div class="invalid-feedback">Por favor, informe um numero de casa.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>

    			<div class="form-group">
    				<label class="control-label">Rua</label>
    				<input type="text" name="rua"  class="form-control" required="" 
    				value="<?=$pacientes['rua']?>"  placeholder="Digite a rua  aqui" id="rua" maxlength="50">
    				<div class="invalid-feedback">Por favor, informe um numero de casa.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>

    			<div class="form-group">
    				<label class="control-label">Numero</label>
    				<input type="text" name="numero"  class="form-control" required="" value="<?=$pacientes['numero'] ?>" placeholder="Digite o numero da casa aqui" id="numero" maxlength="10" >
    				<div class="invalid-feedback">Por favor, informe um numero de casa.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label">Complemento</label>
    				<input type="text" name="complemento"  class="form-control" required="" value="<?=$pacientes['complemento'] ?>" placeholder="Digite o numero da casa aqui" id="complemento" maxlength="50" >
    				<div class="invalid-feedback">Por favor, informe um complemento.</div>
    				<div class="valid-feedback">Tudo certo!</div>
    			</div>
    			<button type="submit" class="btn btn-primary">Editar</button>

    		</form> 


    	</section>
    </div>
    <br>
    <br>
    <br>
    <footer class="bd-dark p-3 col-">
    	
    	<?php  require_once "rodape.php";  ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>