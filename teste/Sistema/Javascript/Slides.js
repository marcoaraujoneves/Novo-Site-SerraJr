function RedirectCadastrarSlide(){
    window.location.href = "php/CadastrarSlide.php";
}

function readURL(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#blah').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$(document.body).on('change', '#arquivo', function(){
	readURL(this);
});

$(document.body).on('click', '#batatas', function(){
	$('#formSlider').validate({
		rules: {
		linkSlider: { required: true },
		//descricao: { required: true },
		//estatus: { required: true },
	},
	messages: {
		linkSlider: { required: 'Ex:https://google.com,Agenda.php,Contado.php'},
		//descricao: { required: 'Preencha a descrição do serviço'},
		//arquivo: { required: 'Coloque uma imagem'},


	},
	submitHandler: function( form ){
		var dados = $( form ).serialize();
		$.ajax({
			type: "POST",
			url: "php/cadastrarSlide.php",
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
		url:"php/excluiSlide.php",  
		method:"POST",  
		data:{CodSlider:codSlide}, 


		success:function(data){
			
			$('#clienteModalDeleta').hide(); // esconde o modal
			$("#returnDeleta").click(); // fecha o modal de fato
			location.reload();

		}


		

	}); 
	}); 