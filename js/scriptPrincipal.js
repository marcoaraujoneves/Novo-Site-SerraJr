var trocaSlide;

$(document).ready(function(){

    /* Previne que o usuário possa clicar e arrastar imagens */
    $('img').on('dragstart', false);
    
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
    
    $('body').css("margin-top",$("#barra-navegacao").css("height"));
    
    /* Slider da capa do site */
    var sliderAtivo = 1;
    
    $('[data-ativo="1"]').css("opacity","0.55");
    $('[data-textativo="1"]').css("left","0");
    
    window.setInterval(trocaSlider, 4500);
    
    function trocaSlider(){
        $('[data-ativo="'+sliderAtivo+'"]').animate({
            opacity: 0
        }, 700);
        $('[data-textativo="'+sliderAtivo+'"]').animate({
            left: "100%"
        }, 700);
        if (sliderAtivo==3){
            sliderAtivo = 1;
        }
        else{
            sliderAtivo++;
        }
        $('[data-ativo="'+sliderAtivo+'"]').animate({
            opacity: 0.55
        }, 700);
        $('[data-textativo="'+sliderAtivo+'"]').animate({
            left: "0"
        }, 700);
    }
    
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
            if(windowTop >= 1800){
                $('#rolarInicio').animate({
                    right:"15px"
                },2500);
            }
        }
    });
});
