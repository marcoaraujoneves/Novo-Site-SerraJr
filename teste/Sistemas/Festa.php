<?php
    session_start();
    
    if(!isset($_SESSION['nome'])){
        header('Location: ../index.php?erro=1');
    }
?>
<!DOCTYPE html>
<style type="text/css" media="screen">

.imgTable{
  max-width:100px;
  max-height: :100px;
}


</style>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema/Festas</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/Festa.css"/>
</head>

<?php
include("BarraNavegacao.php");
?>

<div style="text-align: center;">
    <button data-toggle="modal" data-target="#CadastroFesta" id="cadastrarFesta" class="btn btn-lg BotaoGeral">Cadastrar Festa</button>
</div>

<table  class="table table-striped table-bordered table-hover Tabela" style="width:1000px;" id="tb1">
    <thead >
        <tr >
            <th></th>
            <th width='50px' >Código</th>
            <th>Descrição</th>
            <th width='200px'>Data</th>                                        
            <th style="text-align:center;"col=2>Operação</th>
        </tr>
    </thead>

    <?php 
    require_once __DIR__.'/connect.php';
    $query_select = "SELECT * FROM festas where ativada ='1' order by data;";
    $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
    $rows = array();
    while($row = mysqli_fetch_array($result_select))
        $rows[] = $row;
    foreach($rows as $row){ 
        $codFesta = $row['codFesta'];
        $titulo = $row['titulo'];
        $descricao = $row['descricao'];
        $data = $row['data'];
        $pistaMasc = $row['pistaMasc'];
        $pistaFem = $row['pistaFem'];
        $vipMasc = $row['vipMasc'];
        $vipFem = $row['vipFem'];
        $ativada = $row['ativada'];
        $extensao = $row['extensao'];


        echo '<tr class="odd gradeX">';
        echo '<td><img src="../Img/festa/'.$codFesta.'.'.$extensao.'" class="ImgTd"></td>';
        echo '<td>'.$codFesta.'</td>';
        echo '<td>'.$titulo.'</td>';
        echo '<td >'.$data.'</td>';
        echo '<td><button class="btn BotaoAtualiza " data-toggle="modal" value="'.$codFesta.'" id="atualizaFesta" data-target="#atualizaFestas" type="button">Atualiza</button>';
        echo '<button class="btn BotaoDesativa " data-toggle="modal" id="desativa" name="desativa" data-target="#DesativaFesta" type="button"value="'.$codFesta.'.'.$extensao.'">Desativa</button></td>';
    }
    ?>                                        
</tbody>
</table>
<div class="container">
    




    <div  class="modal" id="CadastroFesta" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:rgb(44,40,76);">
                    <h5 class="modal-title" style="color:white;">Cadastramento de festa:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data"  id="formFesta">
                        <input type='file' name="arquivo" id="arquivo" />
                                <img class = "imgTable" id="blah" src="#" alt="your image" />
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" id="codigoFesta" name="codigoFesta" value="0"><br>
                                    <strong>Título festa:</strong><br>
                                    <input type="text" id="tituloFesta" name="tituloFesta"><br>
                                    <strong>Descrição:</strong><br>
                                    <textarea rows=3 id="descricaoFesta" name="descricaoFesta"></textarea><br>
                                    <strong>Data:</strong>
                                    <input type="date" id="dataFesta" name="dataFesta"><br><br>
                                    <strong>Valor da Pista em reais:</strong><br>
                                    Masculino:
                                    <input type="number" id="pistaMasc" name="pistaMasc"><br>
                                    Feminino:
                                    <input type="number" id="pistaFem" name="pistaFem">
                                </div>
                                <div class="col-md-6">
                                    <strong>Valor na Lista em reais:</strong><br>
                                    Masculino:
                                    <input type="number" id="vipMasc" name="vipMasc"><br>
                                    Feminino:
                                    <input type="number" id="vipFem" name="vipFem"><br>
                                    <strong>Atrações:</strong><br>
                                    <textarea rows=4 id="atracoesFesta" name="atracoesFesta"></textarea><br>
                                    <strong>Link para album no facebook:</strong><br>
                                    <input type="text" id="albumFacebook" name="albumFacebook"><br>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" id="batatas" name="batatas" value="Enviar"/>
                                        <button type="button" class="btn btn-secondary" id="returnServico" data-dismiss="modal"> Cancelar </button>
                    </div>
                
                        
                    </form>
                </div>
            </div>
        </div>
    </div>



        <div style="margin-top:12%;" class="modal" id="DesativaFesta" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:rgb(44,40,76);">
                        <h5 class="modal-title" style="color:white;">Tem certeza do desativamento dessa festa?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" name="desativaFesta" id="desativaFesta" value="Desativar" class="btn BotaoModal"">
                        <button type="button" class="btn BotaoModal" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


        <div  class="modal" id="atualizaFestas" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:rgb(44,40,76);">
                        <h5 class="modal-title" style="color:white;">Cadastramento de festa:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST"   id="formFestaAtualiza">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" id="codigoFestaAtualiza" name="codigoFestaAtualiza" value="0"><br>
                                        <strong>Título festa:</strong><br>
                                        <input type="text" id="tituloFestaAtualiza" name="tituloFestaAtualiza"><br>
                                        <strong>Descrição:</strong><br>
                                        <textarea rows=3 id="descricaoFestaAtualiza" name="descricaoFestaAtualiza"></textarea><br>
                                        <strong>Data:</strong>
                                        <input type="date" id="dataFestaAtualiza" name="dataFestaAtualiza"><br><br>
                                        <strong>Valor da Pista em reais:</strong><br>
                                        Masculino:
                                        <input type="number" id="pistaMascAtualiza" name="pistaMascAtualiza"><br>
                                        Feminino:
                                        <input type="number" id="pistaFemAtualiza" name="pistaFemAtualiza">
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Valor da Vip em reais:</strong><br>
                                        Masculino:
                                        <input type="number" id="vipMascAtualiza" name="vipMascAtualiza"><br>
                                        Feminino:
                                        <input type="number" id="vipFemAtualiza" name="vipFemAtualiza"><br>
                                        <strong>Atrações:</strong><br>
                                        <textarea rows=4 id="atracoesFestaAtualiza" name="atracoesFestaAtualiza"></textarea><br>
                                        <strong>Link para album no facebook:</strong><br>
                                    <input type="text" id="albumFacebookAtualiza" name="albumFacebookAtualiza"><br>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success" id="batatasAtualiza" name="batatasAtualiza" value="Enviar"/>
                            <button type="button" class="btn btn-secondary" id="returnServicoAtualiza" data-dismiss="modal"> Cancelar </button>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
        <script src="Javascript/Festas.js"></script>
        <script src="Javascript/jquery-3.3.1.js"></script>
<script src="Javascript/jquery.validate.min.js"></script>
    </body>
    </html>