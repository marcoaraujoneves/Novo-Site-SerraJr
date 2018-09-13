$(document).ready(function(){
    /* Ao entrar na página de serviços, o link de Serviços no menu será marcado como ativo, destacando a posição */
    // $('#link_servicos').addClass("link_ativo");
    // $('#link_secaoSobre').replace('#', 'index.php#');
    // $('#link_secaoServicos').replace('#', 'index.php#');
    // $('#link_secaoPortifolio').replace('#', 'index.php#');
    // $('#link_secaoBlog').replace('#', 'index.php#');
    // $('#link_secaoContato').replace('#', 'index.php#');
    $('.linkMenuTopo').each(function(){
        this.href = this.href.replace('#', 'index.php#');
    });
});