var codFesta;
$(document).on('click', '#tiraFesta', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado

 codFesta = $(this).attr("value"); 
});

$(document).on('click', '#excluiFesta', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 $.ajax({  
 	url:"php/excluiFesta.php",  
 	method:"POST",  
 	data:{codFesta:codFesta}, 


 	success:function(data){


 		location.reload();

 	}




 });

}); 
$(document).on('click', '#ativa', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 codFesta = $(this).attr("value"); 

});
$(document).on('click', '#ativaFesta', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 $.ajax({  
 	url:"php/ativaFesta.php",  
 	method:"POST",  
		data:{CodFesta:codFesta}, 


		success:function(data){
			

			location.reload();

		}


		

	}); 
	}); 