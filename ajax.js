function teste(){
	let pegar = $("#cpf").val();
	let cpf = pegar.replace(/[.-]/g,"");
	$.ajax({
		method: "POST",
		url: "verificar.php",
		dataType:"json",
		data:{"cpf": cpf} ,
		success:function(retorno){


			console.log(retorno['resultado']);

		},
		error:function(){

		}
		 
	})
	 
	
}