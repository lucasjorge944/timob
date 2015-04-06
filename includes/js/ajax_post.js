$(document).ready(function(){
	$("#btnEnviarMensagem").click(function() {

		var nome = $("#txtNome").val();
		var email = $("#txtEmail").val();
		var assunto = $("#txtAssunto").val();
		var mensagem = tinyMCE.get('txtMensagem').getContent();

		$.ajax({
			url: 'home/enviaremail',
			type: 'POST',
			data: {btnEnviarEmail: 'btnEnviarEmail', nome: nome, email: email, assunto:assunto, mensagem:mensagem},
		})
		.done(function(response) {
			if (response == 1){
				$('#myModalContato').modal('show');
			}
			else{
				$('#myModalManuntencao').modal('show');
			}
		})
		.fail(function() {
			
		})
		.always(function() {
			
		});
	});
});
