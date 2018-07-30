$(document).ready(function(){

    $(".containerProjetoPortifolio").css("height", $("#container_portifolio").css("height"));

    var larguraTela = $('body').css("width");
    larguraTela = larguraTela.replace("px","");
    larguraTela =(parseInt(larguraTela) - 150)/2;
    
    $("#containerListaCapa").css("margin-left",larguraTela);

    $(window).resize(function(){
        
        larguraTela = $('body').css("width");
        larguraTela = larguraTela.replace("px","");
        larguraTela =(parseInt(larguraTela) - 150)/2;
        
        $("#containerListaCapa").css("margin-left",larguraTela);

        $(".containerProjetoPortifolio").css("height", "auto");
    });

    $('#secaoCapa').css("margin-top",$("#barra-navegacao").css("height"));

    /* Ao adicionar a classe fade, a primeira aba ficava em branco até clicar em outra e clicar
     nela novamente, então o seguinte trecho de código foi feito para contornar tal situação */
    $('.linkSobre').click(function(){
        var id = $(this).attr("href");
        if(id=="#nossa_historia" && $(this).attr("data-teste")=="0" ){
            $(this).attr("data-teste", "1");
        }
        else{
            $(id).addClass("fade in");
        }
    });

    var $doc = $('html, body');
    var tamanhoMenu = $("#barra-navegacao").css("height");
    tamanhoMenu = tamanhoMenu.replace("px", "");
    
    
    
    $('.linkMenu ').click(function() {
        $('.navbar-collapse').collapse("hide");

        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - tamanhoMenu
        }, 500);
        return false;
    });

    var alturas = {};
    var i=1;
    $('.secaoSite').each(function () {
        alturas[i] = this.id; // ex: alturas['section_2'] = 600
        i++;
    });
    var numSecoes=parseInt(i) + 1;
    i=parseInt(i);
    var seccao;
    var alturaSecaoI;
    var windowTop;

    $(window).on('scroll', function() {
        for(i=1;i < numSecoes; i++){
            alturaSecaoI = $('#'+alturas[i]).offset().top;
            windowTop = $(window).scrollTop() + parseInt(tamanhoMenu) + 400;
            if(windowTop >= alturaSecaoI ){
                $('.linkMenu').removeClass("link_ativo");
                seccao = alturas[i].replace("secao","link_secao");
                $('#'+seccao).addClass("link_ativo");
            }
        }
    });
});
