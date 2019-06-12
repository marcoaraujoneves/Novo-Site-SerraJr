$("#formPortifolio").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
    $.ajax({
    	type: "POST",
    	url: "php/cadastraPortifolio.php",
    	data: new FormData($("#formPortifolio")[0]),
    	dataType: 'json',
    	cache: false,
    	contentType: false,
    	processData: false,
    	success: function( data )
    	{	


	 	    			$("#returnPortifolio").click(); // fecha o modal de fato
	 	    			ativaAlerta(data.message,1);
	 	    			sleep(2000).then(() => {
	 	    				location.reload();
	 	    			});
	 	    			//

	 	    		},
	 	    		error:function(){
	 	    			ativaAlerta(data.message,2);
	 	    		} 
	 	    	});


});



var codPortifolio;


$(document.body).on('click', '#statusPortifolio', function(){
 // retorna os dados do fetch.php para preencher a tabela via ajax
 codigo = $(this).attr("value"); 
 $.ajax({  
 	url:"php/mudaStatus.php",  
 	method:"POST",
 	data:{codigo:codigo},  
 	beforeSend:function(data){  



 	},
 	success:function(data){
 		
 		$('#onoff'+codigo).html(data);
 		$('#status'+codigo).html("Inativo");
 		teste = $('#status'+codigo).attr("value"); 
 		if(teste=='Ativo'){
 			$('#status'+codigo).html("Inativo");
 			$('#status'+codigo).attr("value","Inativo");
 			
			
 		}
 		if(teste=='Inativo'){
 			$('#status'+codigo).html("Ativo");
 			$('#status'+codigo).attr("value","Ativo");
 			
			
 		}



		}  
	});
}); 

$(document.body).on('click', '#deletaPortifolio', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 codPortifolio = $(this).attr("value"); 
});



	$(document.body).on('click', '#excluidPort', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 $.ajax({  
 	url:"php/excluirPortifolio.php",  
 	method:"POST",  
 	data:{codPortifolio:codPortifolio}, 


 	success:function(data)
 	{	
						//$('#excluirPortifolio').hide(); // esconde o modal
	 	    			//$("#returnPortExcluir").click(); // fecha o modal de fato
	 	    			//location.reload();

	 	    		}




	 	    	}); 
});