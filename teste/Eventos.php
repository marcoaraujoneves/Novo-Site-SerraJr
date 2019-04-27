<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Girassol - Agenda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Agenda.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Rodape.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/BarraNavegacao.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Evento.css"/>
        
    </head>
    <body>
        <?php
            include("BarraNavegacao.php");
        ?>
        <br>        
        <div class="row m-0 border-bottom border-top" style="background-color: whitesmoke">
            <div class="col-md-6 p-0 my-auto">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            require_once __DIR__.'/connect.php';
                            $foto = $_POST["codFoto"];
                            $result_evento = "SELECT * FROM festas where codFesta = $foto;";
                            $resultado_evento = mysqli_query($conn, $result_evento);
                            while( $row_slide = mysqli_fetch_assoc($resultado_evento)){
                                echo "<div class='carousel-item img-fundo mx-auto active' style='background-image: url(Img/festa/".$row_slide['codFesta'].".".$row_slide['extensao'].")'>";
                                echo "<img class='d-block w-100 img-frente pt-3 pb-3' src='Img/festa/".$row_slide['codFesta'].".".$row_slide['extensao']."' alt='".$row_slide['codFesta']."'>";
                                echo "</div>";
                                $titulo = $row_slide['titulo'];
                                $descricao = $row_slide['descricao'];
                                $olddata =  $row_slide['data'];
                                $data =date("d-m-Y", strtotime($olddata));
                                $pistaMasc = $row_slide['pistaMasc'];
                                $pistaFem = $row_slide['pistaFem'];
                                $vipMasc = $row_slide['vipMasc'];
                                $vipFem = $row_slide['vipFem'];
                                $atracoes = $row_slide['atracoes'];
                                $facebook = $row_slide['facebook'];
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h5 class="display-4 py-2"> <?php  echo $titulo;   ?></h5>
                <h6 class="lead"><?php  echo $data;   ?></h6>
                <hr>
                <p class="text-justify"><em><?php  echo $descricao;   ?></em></p>
                <div class="row">
                    <div class="col-md-9 border-right">
                        <h6><strong>Valores</strong></h6>
                        <p><strong>★Na lista até 23:30H★</strong></p>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <img class="imgPreco1 px-1" src="Img/male.svg">
                                <p class="d-inline preco"><em>R$<?php  echo $vipMasc;   ?>,00</em></p>
                                <img class="imgPreco2 px-1" src="Img/female.svg">
                                <p class="d-inline preco"><em>R$<?php  echo $vipFem;   ?>,00</em></p>
                            </div>
                        </div>

                        <p>Normal</p>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <img class="imgPreco1 px-1" src="Img/male.svg">
                                <p class="preco d-inline"><em>R$<?php  echo $pistaMasc;   ?>,00</em></p>
                                <img class="imgPreco2 px-1" src="Img/female.svg">
                                <p class="d-inline preco"><em>R$<?php  echo $pistaFem;   ?>,00</em></p>
                            </div>
                                
                                <!-- <div class="col-md-6">
                                    
                                </div> -->
                                
                        </div>
                            
                        
                        <h6><strong>Atrações</strong></h6>
                        <p><?php echo $atracoes; ?></p>
                        <br>
                        <a target="_blank" href="<?php echo $facebook; ?>" class="stretched-link">PAGINA DO EVENTO!</a>
                        <hr class="d-block d-md-none">
                    </div>
                    <div class="col-md-3 py-3 my-auto text-center">
                        <h6><strong>Faça a sua lista</strong></h6>
                        <p>via <em>Instagram Direct</em></p>
                        <a target="_blank" href="https://www.instagram.com/girassolfriburgo/?hl=pt-br"><img class="mx-auto d-block" src="Img/instagram_quad.ico" height="64px" width="64px"></a>
                    </div>
                </div>
                
            </div>
        </div>

    <?php  } ?>
    <footer>
            <?php
                include("Rodape.php");
            ?>
        </footer>
    <body>
        <script src="Javascript/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script src="sistema/Javascript/Eventos.js"></script>                     