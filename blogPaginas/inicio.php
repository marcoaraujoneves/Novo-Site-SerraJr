        <?php 
        
        $path = "/siteserrajr/trunk";
        
        ?>
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

        <script src="../js/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="<?php echo $path;?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $path;?>/bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $path;?>/css/estiloPrincipal.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $path;?>/css/blogpagina.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $path;?>/css/blog.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $path;?>/css/rodape.css" />
        <script src="<?php echo $path;?>/js/blogpagina.js"></script>
        <script type="text/javascript" language="javascript">

            function mudarTitulo(novotitulo) {

                document.getElementsByTagName('title').item(0).innerHTML = novotitulo;

            }

        </script>
        <link rel="icon" href="<?php echo $path;?>/img/Principal/favicon.ico" type="image/x-icon">
        
    </head>

    <body>

        <?php include('menu.php');
        

        ?>
        <!-- Contém a imagem e o título do blog (1) -->
        <header id="headerBlog">
            <div id="container_header" class="container-fluid">
                <div class="row vertical-center" id="grupo-titulo">
                    <div class="col-md-12">
                        <h1 class="text-center display-1 titulo" id="titulo">BLOG</h1>
                        <h2 class="text-center" id="subtitulo">Notícias recentes da Serra Jr. !</h2>
                    </div>
                </div>
            </div>
        </header>
        <!--============= FIM (1) ==================-->

         <!--Menu com diversas opções relacionadas as postagens (2) -->
        <nav class="navbar navbar-expand-md navbar-light bg-light menuBlog">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <form id="pesquisa" class="form-inline my-0">
                    <div class="form-group text-right">
                        <input class="form-control mr-2" type="search" placeholder="Pesquisar postagens..." aria-label="Pesquisar postagens...">
                        <button class="btn btn-outline-success my-2" type="submit">Pesquisar</button>
                    </div>
              </form>
            </div>
        </nav>
        <!-- ====================== FIM (2) ======================= -->