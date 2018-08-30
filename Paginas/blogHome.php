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
        <link rel="stylesheet" type="text/css" media="screen" href="css/Servicos.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/blog.css" />
        <script src="js/blog.js"></script>
        
        <link rel="icon" href="img/Principal/favicon.ico" type="image/x-icon">
        <title>Blog SerraJr</title>
    </head>

    <body>
        
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

        <!-- Menu com diversas opções relacionadas as postagens (2) -->
        <nav class="navbar navbar-expand-md navbar-light bg-light menuBlog">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    TAGS
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Tag 1</a>
                    <a class="dropdown-item" href="#">Tag 2</a>
                    <a class="dropdown-item" href="#">Tag 3</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      DATA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">2018</a>
                      <a class="dropdown-item" href="#">2017</a>
                      <a class="dropdown-item" href="#">20XX</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ORDENAR POR
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Data</a>
                      <a class="dropdown-item" href="#">Popularidade</a>
                      <a class="dropdown-item" href="#">Alfabético</a>
                    </div>
                  </li>
              </ul>
              <form id="pesquisa" class="form-inline my-0">
                    <div class="form-group text-right">
                        <input class="form-control mr-2" type="search" placeholder="Pesquisar postagens..." aria-label="Pesquisar postagens...">
                        <button class="btn btn-outline-success my-2" type="submit">Pesquisar</button>
                    </div>
              </form>
            </div>
        </nav>
        <!-- ====================== FIM (2) ======================= -->
        <div class="row">
            <div class="colunaesquerda">
                <div class="card">
                    <h2 class="titpag">A Era Mobile</h2>
                    <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto - 2018</time></h5>
                    
                    <div id="caixa_imagemPost">
                        <img src="img/Blog/home/noticia1.jpg" alt="Image" class="imagemPost">
                    </div>
                   
                    <p class="textos">
                        Por volta dos anos 1990, após maior difusão dos computadores, principalmente no ramo empresarial, surgiu uma crescente demanda por aparelhos móveis que tivessem as algumas das principais funções dos PCs, como ler e enviar e-mails, manter agendas, gerenciar planilhas e até controlar remotamente um computador, no intuito de conseguir mais produtividade.
                    </p>
                    <p class="textos">
                        Nesta época surgiram os primeiros PDAs (Personal Digital Assistant), que inovaram a forma de trabalhar, possibilitando acesso móvel a programas e mais conectividade...
                    </p>
                    <div id="caixa_saiba_mais">
                        <a href="blogPagina_EraMobile.html" class="saiba_mais">
                            <b>Saiba Mais »</b>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <h2 class="titpag">Análise estrutural</h2>
                    <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto , 2018</time></h5>
                    <div id="caixa_imagemPost">
                        <img src="img/Blog/home/noticia2.jpg" alt="Image" class="imagemPost">
                    </div>
                    
                    <p class="textos">
                        Esta é uma área fundamental na Engenharia e no Desenvolvimento de projetos. Toda estrutura, peça, máquina, equipamento, etc, deve ter bem definidos alguns aspectos: qual o objetivo, como deve funcionar, para que será utilizado, em que condições de operação ele vai trabalhar, qual carga vai suportar, etc. Esses parâmetros quando bem definidos podem ajudar a construir um projeto conceitual mais detalhado e atento às necessidades do cliente.
                    </p>
                    
                    <div id="caixa_saiba_mais">
                        <a href="blogPagina_AnaliseEstrutural.html" class="saiba_mais">
                            <b>Saiba Mais »</b>
                        </a>
                    </div>
                </div>
                <div class="card">
                        <h2 class="titpag">LOREM IPSUM</h2>
                        <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto , 2018</time></h5>
                        <div class="imagem" style="height:200px;">Insira Imagem</div>
                        <p class="textos">Textinho...</p>
                        <br>
                        <div id="caixa_saiba_mais">
                            <a href="blogPagina_EraMobile.html" class="saiba_mais">
                                <b>Saiba Mais »</b>
                            </a>
                        </div>
                    </div>

                <div class="card">
                        <h2 class="titpag">LOREM IPSUM</h2>
                        <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto , 2018</time></h5>
                        <div class="imagem" style="height:200px;">Insira Imagem</div>
                        <p class="textos">Textinho...</p>
                        <br>
                        <div id="caixa_saiba_mais">
                            <a href="blogPagina_EraMobile.html" class="saiba_mais">
                                <b>Saiba Mais »</b>
                            </a>
                        </div>
                    </div>

                    <div class="card">
                            <h2 class="titpag">LOREM IPSUM</h2>
                            <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto , 2018</time></h5>
                            <div class="imagem" style="height:200px;">Insira Imagem</div>
                            <p class="textos">Textinho...</p>
                            <br>
                            <div id="caixa_saiba_mais">
                                <a href="blogPagina_EraMobile.html" class="saiba_mais">
                                    <b>Saiba Mais »</b>
                                </a>
                            </div>
                        </div>

            </div>
            <div class="colunadireita">
                <div class="card">
                    <h2 class="titpag">Nossa História</h2>
                    <div class="imagem" style="height:100px;">Insira Imagem</div>
                    <p class="textos">Insira a história da serra aqui</p>
                </div>
                <div class="card">
                    <h3 class="titpag">Destaques</h3>
                    <img src="img/Principal/iprj_hall.jpg" alt="Image" class="imagem" style="width:100%;height:auto;">
                    <br>
                    <div class="imagem">Insira Imagem</div>
                    <br>
                    <div class="imagem">Insira Imagem</div>
                </div>
                <div class="card">
                    <h3 class="titpag">Espaço para mais alguma coisa</h3>
                    <br>
                    <p class="textos">Textinho...</p>
                </div>
            </div>
        </div>
    </body>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>
