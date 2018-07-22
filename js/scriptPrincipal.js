$(document).ready(function(){

    $('#secaoCapa').css("margin-top",$("#barra-navegacao").css("height"));

    /* Ao adicionar a classe fade, a primeira aba ficava em branco até clicar em outrae clicar
     nela novamente, então o seguinte trecho de código foi feito para contornar tal situação */
    $('.nav-link').click(function(){
        var id = $(this).attr("href");
        if(id=="#nossa_historia" && $(this).attr("data-teste")=="0" ){
            $(this).attr("data-teste", "1");
        }
        else{
            $(id).addClass("fade in");
        }
    });
});