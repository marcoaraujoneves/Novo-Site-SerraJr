<?php
require_once __DIR__.'/connect.php';

$codFesta =$_POST['codigoFesta'];
$tituloFesta =$_POST['tituloFesta'];
$descricaoFesta =$_POST['descricaoFesta'];
$dataFesta =$_POST['dataFesta'];
$pistaMasc =$_POST['pistaMasc'];
$pistaFem =$_POST['pistaFem'];
$vipMasc =$_POST['vipMasc'];
$vipFem =$_POST['vipFem'];
$atracoesFesta =$_POST['atracoesFesta'];
$albumFacebook =$_POST['albumFacebook'];
$nome = $_FILES[ 'arquivo' ][ 'name' ];
$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
$extensao = strtolower ( $extensao );
echo $atracoesFesta;
if($codFesta != '0'){
    $sql = "  
    UPDATE festas
    set titulo = '$tituloFesta',data = '$dataFesta', pistaMasc = '$pistaMasc', pistaFem = '$pistaFem', vipMasc = '$vipMasc', vipFem = '$vipFem', atracoes = '$atracoesFesta'
    WHERE codFesta ='$codFesta'";
    echo $sql;
    $results = mysqli_query($conn, $sql);


}else{
    $sql = "  
    INSERT INTO festas(titulo,descricao,data,pistaMasc,pistaFem,vipMasc,vipFem,ativada,atracoes,facebook,extensao)
    VALUES ('$tituloFesta','$descricaoFesta','$dataFesta','$pistaMasc','$pistaFem','$vipMasc','$vipFem','1','$atracoesFesta','$albumFacebook','$extensao') ";
    $results = mysqli_query($conn, $sql);
    $batata = $conn->insert_id;

/******
 * Upload de imagens
 ******/

// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
    echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
    echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = $batata. '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = '../../Img/festa/' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';
}
?>