<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Girassol - Programação</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Agenda.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Rodape.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/BarraNavegacao.css"/>
    </head>
    <body>
        <?php
            include("BarraNavegacao.php");
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="caixa_titulo_agenda">
                        <h2 class="display-4" id="titulo">Programação da Semana</h2>
                        <hr>
                    </div>
                </div>
            </div>
        </div> 

    <div class="container">
        <div class="row"> 

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
        $extensao = $row['extensao'];
        $olddata =  $row['data'];
        $data =date("d-m-Y", strtotime($olddata));

        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
        echo '<div class="card border-dark mb-4">';
        echo '<div class="caixa_titulo_card">';
        echo '<h6 class="titulo_festa_card lead" style="font-weight: bold;">'.$titulo.' - '.$data.'</h6>';
        echo '</div>';
        echo '<div class="caixa_imagem_card">';
        echo '<img class="imagem_card" src="Img/festa/'.$codFesta.'.'.$extensao.'"> ';
        echo '<div class="caixa_botao_card" value="'.$codFesta.'" >   ';
        echo '<form action="Eventos.php" method="post">
        <input class="link_festa" type="hidden" value="'.$codFesta.'" id="codFoto" name="codFoto" />
        <input class="link_festa" type="submit" value="Ver Evento" />
        </form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>  




        </div>
    </div>

    <footer> 
        <?php
        include("Rodape.php");
        ?>
    </footer>
        <script src="Javascript/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
    </body>