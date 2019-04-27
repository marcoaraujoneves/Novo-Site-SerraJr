
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/BarraNavegacao.css"/>
</head>
<body onload="ButtonGirassolMenu();">
    <header>
        <div class="BoxBarra" id="BarraNavegacao">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img id="ImagemBarra" class="ImgBarra" src="Img/logo.png">
                    </div>
                    <div class="col-md-8 offset-md-4">
                        <ul id="UlBarra" class="nav justify-content-center EfeitoUl">
                            <li class="nav-item">
                                <a class="EstiloLinkBarra" href="Inicio.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="EstiloLinkBarra" href="Slides.php">Slides</a>
                            </li>
                            <li class="nav-item">
                                <a class="EstiloLinkBarra" href="Festa.php">Festas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="EstiloLinkBarra" href="Fotos.php">Inativadas</a>
                                </li>
                                <li class="nav-item">
                                    <img class="ImagemLi" src="Img/UserIcon.ico">
                                    <a onclick="ActiveBar();" id="Title" class="EstiloLinkBarra" href="#"><?= isset($_SESSION['nome'])? $_SESSION['nome'] : 'Nome usuário' ?></a>
                                    <div class="Reveal" style='z-index:5;' onmouseleave="TiraMenu();" id="AGirassol">

                                        <button onclick="RedirectIndex();" id="Botao2" class="btn btn-lg BotaoEditar2">Sair</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script src="../Javascript/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
        <script src="../bootstrap/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"></script>
        <script src="../bootstrap/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
        <script src="Javascript/BarraNavegacao.js"></script>
