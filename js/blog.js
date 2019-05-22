$(document).ready(function(){
    var $window = $(window);

    function checaLargura(){
        var larguraTela = $window.innerWidth();
        if(window.innerWidth < 768){
            $('#container_header').css('height','100px');
            $('#headerBlog').css('background-image','none');
            $('#titulo').removeClass('display-1');
            $('#subtitulo').css('font-size', '1em');
        } else {
            $('#container_header').css('height','300px');
            $('#headerBlog').css('background-image','url("<?php echo $path;?>/img/hero.png")');
            $('#titulo').addClass('display-1');
            $('#subtitulo').css('font-size','');
        }
    }
    checaLargura();
    $(window).resize(checaLargura);
});