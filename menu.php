<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="js/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" media="screen" href="css/estiloPrincipal.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/Responsividade.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/rodape.css" />

        <link rel="icon" href="img/Principal/favicon.ico" type="image/x-icon">
        <title> Home | Serra Jr. Engenharia </title>
    </head>
    
    <script type="text/javascript">
        /* Máscara Para digitação do número de telefone no formulário de contato */
        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,"");
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
            v=v.replace(/(\d)(\d{4})$/,"$1-$2");
            return v;
        }
        function id( el ){
            return document.getElementById( el );
        }
        window.onload = function(){
            id('contato_telefone').onkeypress = function(){
                mascara( this, mtel );
            }
        }
    </script>
    
    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="barra-navegacao">
            <div class="container">
                <div class="navbar-brand">
                    <a href="index.php">
                        <img class="img-logo" src="img/Principal/LogoSerraJr.png">
                    </a>
                </div>

                <div class="navbar-header">
                    <!-- Botao Toggle -->
                    <button type="button" class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#menu-navegacao" aria-expanded="false" aria-label="Alternar Navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

            </div>

            <!-- Menu de Navegação -->
            <div class="collapse navbar-collapse" id="menu-navegacao">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="linkMenu nav-link link_ativo" id="link_secaoCapa" href="#secaoCapa"> INÍCIO </a></li>
                    <li class="nav-item"><a class="linkMenu nav-link" id="link_secaoSobre" href="#secaoSobre"> SERRA JR. </a></li>
                    <li class="nav-item"><a class="linkMenu nav-link" id="link_secaoServicos" href="#secaoServicos"> SERVIÇOS </a></li>
                    <li class="nav-item"><a class="linkMenu nav-link" id="link_secaoPortifolio" href="#secaoPortifolio"> PORTIFÓLIO </a></li>
                    <li class="nav-item"><a class="linkMenu nav-link" id="link_secaoBlog" href="#secaoBlog"> BLOG </a></li>
                    <li class="nav-item"><a class="linkMenu nav-link" id="link_secaoContato" href="#secaoContato"> CONTATOS </a></li>
                </ul>
            </div>
        </nav>