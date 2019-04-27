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
    <title>Sistema</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/Inicio.css"/>
</head>
    <?php
        include("BarraNavegacao.php");
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-4">
                    <img class="ImgLogoInicio" src="Img/logo.png">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-1">
                   <h1><strong>Bem-vindo!<strong><h1>
                   <h2>Clique em uma das Abas!</h2>
                </div>
            </div>
        </div>
    </body>
</html>