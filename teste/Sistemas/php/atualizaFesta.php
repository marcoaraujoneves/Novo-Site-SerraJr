<?php
require_once __DIR__.'/connect.php';

$codFesta =$_POST['codigoFestaAtualiza'];
$tituloFesta =$_POST['tituloFestaAtualiza'];
$descricaoFesta =$_POST['descricaoFestaAtualiza'];
$dataFesta =$_POST['dataFestaAtualiza'];
$pistaMasc =$_POST['pistaMascAtualiza'];
$pistaFem =$_POST['pistaFemAtualiza'];
$vipMasc =$_POST['vipMascAtualiza'];
$vipFem =$_POST['vipFemAtualiza'];
$atracoesFesta =$_POST['atracoesFestaAtualiza'];
$albumFacebook =$_POST['albumFacebookAtualiza'];


    $sql = "  
    UPDATE festas
    set titulo = '$tituloFesta',data = '$dataFesta',descricao = '$descricaoFesta', pistaMasc = '$pistaMasc', pistaFem = '$pistaFem', vipMasc = '$vipMasc', vipFem = '$vipFem', atracoes = '$atracoesFesta', facebook = '$albumFacebook'
    WHERE codFesta ='$codFesta'";
    echo $sql;
    $results = mysqli_query($conn, $sql);



?>