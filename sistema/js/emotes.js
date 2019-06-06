$(document.body).on('click', '#cadastrarTien', function(){
	$('#formSlider').validate({
		rules: {
		//nomeSlider: { required: true },

	},
	messages: {
		//nome: { required: 'Preencha o campo nome'},


	},
	submitHandler: function( form ){
		var dados = $( form ).serialize();
		$.ajax({
			type: "POST",
			url: "php/cadastraEmocao.php",
			data: new FormData($('form')[1]),

			// Tell jQuery not to process data or worry about content-type
			// You *must* include these options!
			cache: false,
			contentType: false,
			processData: false,
			success: function( data )
			{	$('#Cadastrar').hide(); // esconde o modal
			$("#returnServico").click(); // fecha o modal de fato
			$('#formSlider').each (function(){
				this.reset();
			});
			location.reload();
					 }
				 });

		return false;
	}
});
});



$(document.body).on('click', '#slider', function(){
	$('#addremove').val('0');
	$('#blah').attr('src', ''); // Clear the src
	 $("#formSlider").trigger('reset');
	
	});
var codSlide;
$(document).on('click', '#deletaSlide', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
	codSlide = $(this).attr("value"); 
	}); 

$(document).on('click', '#excluirSlide', function(){

 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
	$.ajax({  
		url:"php/excluiEmocao.php",  
		method:"POST",  
		data:{codEstatus:codSlide}, 


		success:function(data){
			
			$('#clienteModalDeleta').hide(); // esconde o modal
			$("#returnDeleta").click(); // fecha o modal de fato
			location.reload();

		}


		

	}); 
	}); 