<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Girassol - Cardápio</title>
        <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO">
        <link rel="stylesheet" type="text/css" media="screen" href="Css/cardapio.css"/>
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
                    <h2 id="titulo" class="display-4">Cardápio</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="carouselPrincipal" class="carousel slide" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselPrincipal" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselPrincipal" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active mx-auto"  >
                                <img class="d-block w-100 img-frente " src="Img\Cardapios\cardapio1res.png" alt="First slide">
                            </div>
                            <div class="carousel-item  mx-auto">
                                <img class="d-block w-100 img-frente " src="Img\Cardapios\cardapio2res.png" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev" id="link">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next">
                        <span class=" carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <?php
                include("Rodape.php");
            ?>
        </footer>
        <script src="Javascript/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
        <script src="bootstrap/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"></script>
        <script src="bootstrap/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
  
    </body>
</html>