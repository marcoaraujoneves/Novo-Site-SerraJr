<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Girassol</title>
        <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO">
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Index.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Rodape.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/BarraNavegacao.css"/>

    </head>

    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>
        <?php
        include("BarraNavegacao.php");
        ?>
        <div class="container-fluid p-0">
            <?php
            require_once __DIR__.'/connect.php';
            $result_carousels = "SELECT * FROM slide;";
            $resultado_carousels = mysqli_query($conn, $result_carousels);
            if(($resultado_carousels) AND ($resultado_carousels->num_rows != 0)){
                ?>
                <div class="row m-0">
                    <div class="col-md-12 p-0">
                        <div id="carouselPrincipal"  class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <?php
                            $cont_slide = 0;
                            $i = 1;
                            while( $row_slide = mysqli_fetch_assoc($resultado_carousels)){
                                $active = "";
                                if($cont_slide == 0){
                                            $active = "active";
                                        }
                                        echo "<div class='carousel-item img-fundo mx-auto $active' style='background-image: url(Img/slider/".$row_slide['CodSlide'].".".$row_slide['extensao'].")'>";
                                        echo "<a href='".$row_slide['linkSlide']."'><img class='d-block w-100 img-frente pt-3 pb-3' src='Img/slider/".$row_slide['CodSlide'].".jpg' alt='".$row_slide['CodSlide']."'></a>";
                                        echo "</div>";
                                        $cont_slide++;
                                        $i = $i+1;
                                    }
                                    ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next">
                            <span class=" carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                 <?php } ?>
            </div>
           
        </div>
        
            <div class="FundoMapa">
                <div class="row m-4 CaixaMapa">
                    <div class="col-md-6 border rounded p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.5658962363086!2d-42.530245749421276!3d-22.294428121839342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x978af5ba59c221%3A0x5993f3a80a3951c6!2sGirassol+Music+Bar!5e0!3m2!1spt-BR!2sbr!4v1541277433639" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 p-4 text-justify card">
                        <h3 class="card-header">Venha nos Visitar!</h3>
                        <!--<div class="linha"></div>-->
                    
                        <div class="card-body">
                        <p align="left" class="lead"><span class="font-italic font-weight-bold">Endereço:</span> Avenida Emil Cleff, 75 - Ypu, Nova Friburgo</p>
                        <p align="left" class="lead"><span class="font-italic font-weight-bold">Horário de Funcionamento:</span> Sexta e Sabado - 20:00h às 04:00h</p>
                        <!-- <p><span class="font-italic font-weight-bold">OBS:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis nisi non libero finibus tempor. Aenean sollicitudin enim ut odio sagittis scelerisque at eu leo. Sed malesuada urna eu odio rhoncus, ac hendrerit arcu vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras luctus gravida sodales. Phasellus diam nisi, volutpat ac purus eu, posuere commodo ante. In hac habitasse platea dictumst.</p> -->
                        <a href="GirassolMusicBar.php">Conheça a nossa história ></a><br>
                        <div class="fb-page" 
                        data-href="https://www.facebook.com/girassolmusicbar/"
                        data-width="300" 
                        data-hide-cover="false"
                        data-show-facepile="false"></div>
                    </div>
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
