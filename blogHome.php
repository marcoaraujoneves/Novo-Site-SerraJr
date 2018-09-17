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

        <?php include('menu.php'); ?>
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

        <!-- Menu com diversas opções relacionadas as postagens (2) 
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
        </nav>-->
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
                        Celulares representaram um grande avanço em sua época, modificando bruscamente a forma como a sociedade se comunicava e até a forma como o mercado ser comportaria. Computadores foram ainda mais impactantes, sendo empregados nas mais diversas áreas e moldando o futuro de diversos ramos. Agora os dispositivos mobile, que em muitos casos unem estes dois mundos, são foco de um mercado bilionário que cresce cada dia mais.
                    </p>

                    <div id="caixa_saiba_mais">
                        <a href="blogPagina_EraMobile.php" class="saiba_mais">
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
                        <a href="blogPagina_AnaliseEstrutural.php" class="saiba_mais">
                            <b>Saiba Mais »</b>
                        </a>
                    </div>
                </div>
                <div class="card">
                        <h2 class="titpag">Desenho Técnico</h2>
                        <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto , 2018</time></h5>
                        <div id="caixa_imagemPost">
                            <img src="img/Blog/home/noticia3.jpg" alt="Image" class="imagemPost">
                        </div>
                        <p class="textos">
                            Já tentou imaginar explicar a alguém, apenas com palavras e sugestões, como é a aparência e o funcionamento de uma máquina ou até mesmo de uma “simples” peça? Todos os seus aspectos geométricos, detalhes, medidas, método de trabalho, particularidades? Parece uma tarefa árdua ou até mesmo impossível, pois de fato é! A única forma de representação fiel que se pode usar para solucionar essa questão é o desenho técnico.
                        </p>
                        <div id="caixa_saiba_mais">
                            <a href="blogPagina_DesenhoTecnico.php" class="saiba_mais">
                                <b>Saiba Mais »</b>
                            </a>
                        </div>
                    </div>

                <div class="card">
                        <h2 class="titpag">A História do Android</h2>
                        <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto , 2018</time></h5>
                        <div id="caixa_imagemPost">
                            <img src="img/Blog/home/noticia4.jpg" alt="Image" class="imagemPost">
                        </div>
                        <p class="textos">
                            O sistema operacional Android, hoje o mais popular do mundo, surgiu na Califórnia, em 2002, quando um grupo de três amigos abriu uma empresa, de mesmo nome, com o intuito de criar um sistema operacional inteligente para câmeras digitais. Após certo tempo perceberam que não havia mercado suficiente para que o projeto obtivesse sucesso, então voltaram-se para o mercado de celulares, onde os principais concorrentes seriam o Windows Mobile, da Microsoft, e o sistema Symbian, da Nokia.
                        </p>
                        <div id="caixa_saiba_mais">
                            <a href="blogPagina_HistoriaAndroid.php" class="saiba_mais">
                                <b>Saiba Mais »</b>
                            </a>
                        </div>
                    </div>

                    <div class="card">
                            <h2 class="titpag">Prototipagem 3D</h2>
                            <h5 class="estilodata"><time datetime="2018-08-21">03 de Agosto , 2018</time></h5>
                            <div id="caixa_imagemPost">
                                <img src="img/Blog/home/noticia5.jpg" alt="Image" class="imagemPost">
                            </div>
                            <p class="textos">
                                Você já deve ter ouvido falar em indústria 4.0 ou quarta revolução industrial, certo? E sobre prototipagem? Todos estes termos estão em evidência ultimamente e não é por acaso. A indústria 4.0 está sendo impactada pelos avanços da tecnologia de uma forma excepcional, e a prototipagem 3D é um desses motores dessa revolução. Caso ainda não esteja familiarizado com essa terminologia e com os avanços tecnológicos da quarta revolução industrial, venha com a gente que estamos prontos para te ajudar a entender e aplicar esses conceitos para a integração da sua empresa na Era Da Informação.
                            </p>
                            <div id="caixa_saiba_mais">
                                <a href="blogPagina_Prototipagem.php" class="saiba_mais">
                                    <b>Saiba Mais »</b>
                                </a>
                            </div>
                        </div>

            </div>
             <div class="colunadireita">
                <div class="card">
                    <h2 class="titpag2">Nossa História</h2>
                    <a href="index.html#secaoSobre"><img src="img/Blog/home/Capa-Facebook.png" alt="Image" class="imagem" id="imagem_sobre"></a>
                    <a href="index.html#secaoSobre" class="link_texto"><p class="textos1">A Serra Jr. Engenharia, criada em 08 de maio de 2002, é uma empresa formada exclusivamente por alunos do curso de graduação de Engenharia...</p></a> 
                </div>
                <div class="card">
                    <h3 class="titpag2">Destaques</h3>
                    <a href="blogPagina_DesenhoTecnico.php"><img src="img/Blog/home/noticia3.jpg" alt="Image" class="imagem"></a>
                    <a href="blogPagina_AnaliseEstrutural.php"><img src="img/Blog/home/noticia2.jpg" alt="Image" class="imagem"></a>
                    <a href="blogPagina_EraMobile.php"><img src="img/Blog/home/noticia1.jpg" alt="Image" class="imagem"></a>
                </div>
                <div class="card">
                    <h3 class="titpag">Espaço para mais alguma coisa</h3>
                    <br>
                    <p class="textos">Textinho...</p>
                </div>
            </div>
        </div>
        <?php include('rodape.php'); ?>
    </body>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/Servicos.js"></script>
</html>
