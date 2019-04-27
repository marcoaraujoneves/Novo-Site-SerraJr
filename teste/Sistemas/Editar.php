<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/Editar.css"/>
</head>
    <?php
        include("BarraNavegacao.php");
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-4">
                    <img class="ImgLogoForm" src="Img/logo.png">
                </div>
                <div class="col-md-12 offset-md-4">
                    <form class="Formulario">
                        <div class="form-row">
                            <div class="col">
                                <strong>Usuário:</strong><br>
                                <strong>Email:</strong><br>
                                <input type="text" class="InputForm1" placeholder="E-Mail" required>
                                <br>
                                <br>
                                <strong>Senha:</strong><br>
                                <input type="password" class="InputForm1" placeholder="Senha" required>
                            </div>
                        </div>
                        <button type="button" class="btn BotaoForm">Alterar</button>
                        <button type="button" class="btn BotaoForm">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>