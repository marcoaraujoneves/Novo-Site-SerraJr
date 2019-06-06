<?php
require_once __DIR__.'/../connect.php';

$missao =$_POST['textoMissao'];
$visao =$_POST['textoVisao'];
$sql = "UPDATE sobre set missao = '$missao', visao = '$visao' where codSobre ='1'";

$resultado = mysqli_query($conn, $sql);
if($resultado) {
    echo json_encode(array('status' => 'error','message'=> 'Dados atualizados com sucesso!!'));
} else {
    echo json_encode(array('status' => 'error','message'=> 'Erro ao atualizar os dados!'));
}

?>