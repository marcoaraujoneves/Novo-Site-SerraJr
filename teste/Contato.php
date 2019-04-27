<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Girassol - Contato</title>
        <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO">
        <link rel="stylesheet" type="text/css" media="screen" href="Css/Contato.css"/>
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
                    <div id="caixa_titulo_contato">
                        <h2 id="titulo" class="display-4">Contato</h2>
                        <hr>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5">
                    <p class="text-justify">Preencha o formulário abaixo e entre em contato conosco. É importante que os campos sejam preenchidos corretamente para uma comunicação eficiente.</p> 
                    <p>Se preferir, escreva direto para <a href="mailto:contato@barramusic.art.br">contato@girassol.art.br</a></p>
                    <form action="http://utils.infolink.com.br/fm/FormMail.cgi" method="post">
                        <input type=hidden name="recipient" value="contato@barramusic.art.br">
                        <input type=hidden name="redirect" value="http://www.barramusic.art.br/beta2/obrigado.html">

                        <input class="form-control mt-3" name="name" type="text" placeholder="Seu nome">
                        <input class="form-control mt-3" name="email" type="email" placeholder="Seu e-mail">
                        <input class="form-control mt-3" name="telefone" type="text" placeholder="Seu telefone">
                        <input class="form-control mt-3" name="assunto" type="text" placeholder="Assunto">
                        <textarea class="form-control mt-3" name="message" placeholder="Digite aqui sua mensagem"></textarea>
                        <input class="btn mt-3 float-right" name="submit" type="submit" value="Enviar">
                    </form>
                </div>               
                <div class="col-md-6 pt-3 pt-md-0 pl-md-5">
                    <hr class="d-md-none">
                    <div id="Corporativo">
                        <h3>Corporativo</h3>
                        <p>Eventos corporativos, eventos especiais e locação do espaço.</p>
                        <a href="mailto:corporativo@barramusic.art.br">corporativo@girassol.art.br</a>
                    </div>
                    <br>
                    <div id="Assessoria">
                        <h3>Assessoria de Imprensa</h3>
                        <p>Credenciamento para cobertura dos shows:<br>
                            <em>Ricardo Araújo</em><br></p>
                        <a href="mailto:imprensa@barramusic.art.br">imprensa@girassol.art.br</a>
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