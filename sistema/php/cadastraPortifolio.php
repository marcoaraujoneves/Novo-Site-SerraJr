<?php
require_once __DIR__.'/../connect.php';


$nome = isset($_POST['nomePortifolio']) ? $_POST['nomePortifolio'] : '';
$descricao = isset($_POST['descricaoPortifolio']) ? $_POST['descricaoPortifolio'] : '';
$arquivo_tmp = $_FILES[ 'portifolioFoto' ][ 'tmp_name' ];
$nomes = $_FILES[ 'portifolioFoto' ][ 'name' ];
$extensaos = pathinfo ( $nomes, PATHINFO_EXTENSION );
$extensaos = strtolower ( $extensaos );
$sql = "  
INSERT INTO portifolio(nome,descricao,extensao)
VALUES ('$nome','$descricao','$extensaos') ";
$results = mysqli_query($conn, $sql);
$batata = $conn->insert_id;

if ( isset( $_FILES[ 'portifolioFoto' ][ 'name' ] ) && $_FILES[ 'portifolioFoto' ][ 'error' ] == 0 ) {
   // echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
   // echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
   // echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
   // echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';

    $arquivo_tmp = $_FILES[ 'portifolioFoto' ][ 'tmp_name' ];
    $nome = $_FILES[ 'portifolioFoto' ][ 'name' ];

    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
    $extensao = strtolower ( $extensao );
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensaos ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = $batata. '.' . $extensao;

        // Concatena a pasta com o nome
        $destino = '../img/portifolio/'.$novoNome;

        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) && $results ) {

            echo json_encode(array('status' => 'success','message'=> 'Imagem salva com sucesso'));
        }
        else
            echo json_encode(array('status' => 'error','message'=> 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.'));

    }
    else
        echo json_encode(array('status' => 'error','message'=> 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"'));
}
else
    echo json_encode(array('status' => 'error','message'=> 'Você não enviou nenhum arquivo!'));
