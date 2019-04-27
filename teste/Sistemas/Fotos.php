<?php
    session_start();
    
    if(!isset($_SESSION['nome'])){
        header('Location: ../index.php?erro=1');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema/Fotos</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/Festa.css"/>
</head>
    <?php
        include("BarraNavegacao.php");
    ?>
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
            <tbody>
            <?php 
            require_once __DIR__.'/connect.php';
            $query_select = "SELECT * FROM festas where ativada='0' ;";
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
                echo '<td><img src="../Img/festa/'.$codFesta.'.jpg" class="ImgTd"></td>';
                echo '<td>'.$codFesta.'</td>';
                echo '<td>'.$titulo.'</td>';
                echo '<td >'.$data.'</td>';
                echo '<td><button class="btn BotaoAtualiza" data-toggle="modal" value="'.$codFesta.'.'.$extensao.'" data-target="#ExcluirFesta" type="button" id="tiraFesta" >Excluir</button>';
                echo '<button class="btn BotaoDesativa" data-toggle="modal" id="ativa" name="ativa" data-target="#ativaFestas" type="button" value="'.$codFesta.'">Ativa</button></td>';
            }
            ?>                                                 
            </tbody>
        </table>
        </div>
        <div style="margin-top:12%;" class="modal" id="ativaFestas" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:rgb(44,40,76);">
                        <h5 class="modal-title" style="color:white;">Tem certeza do ativamento dessa festa?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" name="ativaFesta" id="ativaFesta" value="Ativar" class="btn BotaoModal"">
                        <button type="button" class="btn BotaoModal" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:12%;" class="modal" id="ExcluirFesta" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:rgb(44,40,76);">
                    <h5 class="modal-title" style="color:white;">Tem certeza da exclusão dessa foto?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div> 
                    <div class="modal-footer">
                        <button style="margin-left:190px;" type="button" id="excluiFesta" class="btn BotaoFotos">Excluir</button><br>
                        <button type="button" class="btn BotaoFotos" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
                <script src="Javascript/Fotos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </body>
</html>