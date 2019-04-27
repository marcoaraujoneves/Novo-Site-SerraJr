<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Girassol - Lista</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Lista.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Rodape.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/BarraNavegacao.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Lista.css"/>
    </head>
    <body>
        <?php
            include("BarraNavegacao.php");
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="caixa_titulo_lista">
                        <h2 id="titulo" class="display-4">Faça sua lista!</h2>
                        <hr>
                    </div>
                </div>
            </div>
        </div> 
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="imgLista" src="img/girassol.jpeg">
                </div>
                <div class="col-sm-6">
                    <p class="fraseLista">Entre em contato e faça sua festa!</p>
                    <img class="imgIcon" src="img/zapLogo.png">
                    <p class="textoInfo">(22) 99743-3832</p>
                    <img class="imgIcon" src="img/email.png">
                    <p class="textoInfo">corporativo@barramusic.art.br</p>
                </div>
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