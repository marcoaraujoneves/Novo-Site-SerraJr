function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#arquivo").change(function() {
	readURL(this);
});

$(document.body).on('click', '#batatas', function(){
	$('#formFesta').validate({
		rules: {
		tituloFesta: { required: true },
		//descricao: { required: true },
		//estatus: { required: true },
	},
	messages: {
		//nome: { required: 'Preencha o campo nome'},
		//descricao: { required: 'Preencha a descrição do serviço'},
		//arquivo: { required: 'Coloque uma imagem'},


	},
	submitHandler: function( form ){
		var dados = $( form ).serialize();
		$.ajax({
			type: "POST",
			url: "php/cadastraFesta.php",
			data: new FormData($('form')[0]),

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



$(document.body).on('click', '#cadastrarFesta', function(){
	$('#addremove').val('0');
	$('#blah').attr('src', ''); // Clear the src
	 $("#formFesta").trigger('reset');
	
	});
var codFesta;
$(document).on('click', '#desativa', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 codFesta = $(this).attr("value"); 

});

$(document).on('click', '#atualizaFesta', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 codFesta = $(this).attr("value"); 

});

$(document).on('click', '#cadastrarFesta', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 document.getElementById("formFesta").reset();

}); 

$(document).on('click', '#desativaFesta', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 $.ajax({  
 	url:"php/desativaFesta.php",  
 	method:"POST",  
		data:{CodFesta:codFesta}, 


		success:function(data){
			

			location.reload();

		}


		

	}); 
	}); 

$(document).on('click', '#atualizaFesta', function(){

	codFesta = $(this).attr("value"); 
 // retorna os dados do fetch.php para preencher a tabela via ajax 
	$.ajax({  
		url:"php/pegaFesta.php",  
		method:"POST",
		data:{codFesta:codFesta},
		dataType:"json",   
		beforeSend:function(data){  



		},
		success:function(data){
			$('#codigoFestaAtualiza').val(data.codFesta);  
			$('#tituloFestaAtualiza').val(data.titulo);
			$('#descricaoFestaAtualiza').val(data.descricao);
			$('#dataFestaAtualiza').val(data.data);
			$('#pistaMascAtualiza').val(data.pistaMasc);
			$('#pistaFemAtualiza').val(data.pistaFem);
			$('#vipMascAtualiza').val(data.vipMasc);
			$('#vipFemAtualiza').val(data.vipFem);
			$('#atracoesFestaAtualiza').val(data.atracoes);
			$('#albumFacebookAtualiza').val(data.facebook);



		}  
	});

	$(document.body).on('click', '#batatasAtualiza', function(){
		$('#formFestaAtualiza').validate({
			rules: {
				tituloFestaAtualiza: { required: true },
		//descricao: { required: true },
		//estatus: { required: true },
	},
	messages: {
		//nome: { required: 'Preencha o campo nome'},
		//descricao: { required: 'Preencha a descrição do serviço'},
		//arquivo: { required: 'Coloque uma imagem'},


	},
	submitHandler: function( form ){
		var dados = $( form ).serialize();
		$.ajax({
			type: "POST",
			url: "php/atualizaFesta.php",
			data: new FormData($('form')[1]),

			// Tell jQuery not to process data or worry about content-type
			// You *must* include these options!
			cache: false,
			contentType: false,
			processData: false,
			success: function( data )
			{	$('#Cadastrar').hide(); // esconde o modal
			$("#returnServicoAtualiza").click(); // fecha o modal de fato
			$('#formSliderAtualiza').each (function(){
				this.reset();
			});
			location.reload();
		}
	});

		return false;
	}
});
	});


}); 