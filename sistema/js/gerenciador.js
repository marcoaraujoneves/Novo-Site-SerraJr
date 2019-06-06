function sleep (time) {
	return new Promise((resolve) => setTimeout(resolve, time));
}

var dissmissAlert = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
var mensagem = '';
var alertSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">';
var alertDanger = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
var alertWarning = '<div class="alert alert-warning alert-dismissible fade show" role="alert">';

function ativaAlerta(texto,classe){
	mensagem = '<strong>'+ texto +'</strong>';
	switch(classe){
		case 1:
		$('#containerAlert').html(alertSuccess+mensagem+dissmissAlert+'</div>');
		break;
		case 2:
		$('#containerAlert').html(alertDanger+mensagem+dissmissAlert+'</div>');
		break;
		case 3:
		$('#containerAlert').html(alertWarning+mensagem+dissmissAlert+'</div>');
		break;
		default:
		$('#containerAlert').html(alertWarning+mensagem+dissmissAlert+'</div>');
		break;
	}
}


$("#formDiretoria").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
    $.ajax({
    	type: "POST",
    	url: "php/fotoDiretoria.php",
    	data: new FormData($("#formDiretoria")[0]),
    	dataType: 'json',
    	cache: false,
    	contentType: false,
    	processData: false,
    	success: function( data )
    	{	


	 	    			$("#returnDiretoria").click(); // fecha o modal de fato
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

$(document).on('click','#btnMissao', function(){
	$.ajax({
		url:'php/carregaMissao.php',
		dataType:"json",
		success:function(data){
               
                	$('#textoMissao').val(data.missao);
                	$('#textoVisao').val(data.visao);


          
            },
            error: function(){
            	ativaAlerta('Erro ao realizar a requisição, tente novamente mais tarde!',2);
            }
        });
});



$("#formMissao").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    $.ajax({
    	type: "POST",
    	url: "php/missao.php",
    	data: new FormData($("#formMissao")[0]),
    	dataType: 'json',
    	cache: false,
    	contentType: false,
    	processData: false,
    	success: function( data )
    	{	
    		$("#returnMissao").click(); // fecha o modal de fato
	 	    			ativaAlerta(data.message,1);
	 	    			sleep(2000).then(() => {
	 	    				location.reload();
	 	    			});

	 	    		},
	 	    		error:function(){
	 	    			ativaAlerta(data.message,2);
	 	    		} 
	 	    	});


});

