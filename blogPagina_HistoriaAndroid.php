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
        <link rel="stylesheet" type="text/css" media="screen" href="css/blogpagina.css" />
        <script src="js/blogpagina.js"></script>
        
        <link rel="icon" href="img/Principal/favicon.ico" type="image/x-icon">
        <title>A História Do Android</title>
    </head>

    <body>

        <?php include('menu.php');?>
        
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
        <article class="container-fluid px-5">
            <div class="row">
                <div class="col-md-8 text-justify mt-5 pl-md-5">
                    <h2 class="titulo m-0">A História Do Android</h2>
                    <h5 class="estilodata"><time datetime="2018-08-03">03 de Setembro, 2018</time></h5>  
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Historia Android/img1.png">
                    <p class="textos"> 
                        O sistema operacional Android, hoje o mais popular do mundo, surgiu na Califórnia, em 2002, quando um grupo 
                        de três amigos abriu uma empresa, de mesmo nome, com o intuito de criar um sistema operacional inteligente para câmeras digitais. 
                        Após certo tempo perceberam que não havia mercado suficiente para que o projeto obtivesse sucesso, então voltaram-se 
                        para o mercado de celulares, onde os principais concorrentes seriam o Windows Mobile, da Microsoft, e o sistema Symbian, da Nokia.
                    </p>
                    <p class="textos">
                        Já no início enfrentaram um grande problema com falta de investimento no negócio e não conseguiram apoio nem de empresas 
                        especializadas em investimentos do tipo, nem de operadoras, que viam seu poder no mercado ameaçado com o projeto.
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Historia Android/img2.jpg">
                    
                    <p class="textos">
                        Tudo mudou quando em 2005, ao fazer a compra de várias startups que vinham se destacando no mercado, a Google comprou 
                        também o Android, mandando um grupo de desenvolvedores para a empresa, e dando continuidade com o projeto.
                    </p>
                    <p class="textos">
                        Dois anos mais tarde, em 2007, em um acordo com empresas do setor, como LG, Sony, Samsung e Motorola, 
                        a Google lançou o Android, com a premissa de ser um sistema operacional aberto, baseado no kernel do Linux, 
                        e que serviria como uma plataforma única para dispositivos móveis.
                    </p>
                    <p class="textos">
                        Só que o projeto teve que sofrer grandes mudanças para manter-se competitivo, pois no mesmo ano a Apple lançou 
                        o primeiro iPhone, com tecnologias novas, e muitas funcionalidades bem superiores ao do projeto inicial do 
                        Android, que era bem limitado nesta fase.
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Historia Android/img3.jpg">

                    <p class="textos">
                        Com o passar dos anos, diversas funcionalidades foram acrescentadas, tornando o Android muito mais amigável 
                        ao usuário, proporcionando cada vez mais conectividade e sincronizando basicamente tudo nos Smartphones; 
                        oferecendo, por exemplo: sincronização de diversas contas de e-mail no mesmo aparelho, controle por voz, 
                        sistemas Voip, que permitiam o uso de aplicativos como o Skype, a partir de aparelhos móveis, uso de 
                        aplicativos de produção, como planilhas, além das redes sociais e inúmeras outras funcionalidades. Com a 
                        relativa facilidade para que os desenvolvedores pudessem lançar seus aplicativos na loja oficial do Android, 
                        o catálogo da plataforma cresceu muito rápido, aumentando ainda mais as funcionalidades disponíveis para os 
                        usuários.
                    </p>
                    <p class="textos">
                        Aliado à estratégias de Marketing como os nomes das versões, que, a partir do Android 1.5 começou a receber nomes 
                        de doces em ordem alfabética, o grande catálogo contribuiu muito para que o sistema se tornasse, em 2010, o mais 
                        popular do mundo e, em 2017, superasse o Windows como líder mundial em acessos à Internet.
                    </p>
                    <p class="textos">
                        Outro detalhe que conta muito para o sistema é a democratização que ele trouxe ao mercado. O Android é encontrado 
                        desde aparelhos mais básicos, até os mais avançados, oferecendo sempre diversas opções de funcionalidades e proporcionando 
                        conectivadade aos usuários.
                    </p>
                    
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Historia Android/img4.jpg">

                    <p class="textos">
                        Após esse crescimento mundial, o Android começou uma expansão para diversos segmentos de mercado, como sistemas para carros, 
                        SmartTVs, desktop, dispositivos wear, sistemas de pagamentos, etc, se tornando o mais utilizado do mundo, com mais de um bilhão 
                        de dispositivos rodando o sistema atualmente.
                    </p>

                    <div class="links">
                        <h5 style="text-align: center" >Referências</h5>
                        <ol>
                            <li> <a href="#">Link aqui.</a></li>
                            <li> <a href="#">Link aqui.</a></li>
                            <li> <a href="#">Link aqui.</a></li>
                        </ol>
                    </div>
                    <div class="card bg-light my-3 p-3">
                        <div class="row no-gutters">
                            <div class="mx-auto">
                                <img id="foto_autor" class="img-fluid vertical-center mx-3 border" src="img/Blog/Autores/autor.jpg">
                            </div>
                            <div class="col-md">
                                <div class="card-block p-3">
                                    <p style="text-align: right ; font-size: 13px ; font-weight: 600; padding:0 ;  " >Autor</p>
                                    <h3 class="card-title" id="nome_autor">Marco Araujo Neves</h3>
                                    <p class="textos">
                                    Estudante de Engenharia de Computação no Instituto Politécnico da UERJ, formado como Auxiliar de Programação de Computadores pela ETEC em São Paulo.<br>
                                        Trabalha na empresa principalmente com projetos Web, tendo participado também de projetos de automação de processos utilizando a plataforma Arduino.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="links">
                        <h4>Postagens Relacionadas</h4>
                        <ul class="font-italic">
                            <li><a href="blogPagina_EraMobile.php">A Era Mobile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <aside id="lateral" class="col-md-3 text-justify mt-5 pr-md-5">
                    <h2 class="titulo">ASIDE</h2>
                    <p>Esta área pode conter qualquer coisa</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lobortis volutpat. 
                        Morbi posuere, risus ut tincidunt feugiat, risus ante cursus tellus, et finibus enim nisl et purus. 
                        Aliquam accumsan, tellus at mollis consequat, ante metus aliquet metus, eget accumsan massa orci quis risus. 
                        Aliquam erat volutpat. Donec sit amet porttitor orci. Fusce commodo sapien ac lorem blandit, a suscipit purus malesuada. 
                        Curabitur vestibulum turpis ut lorem vestibulum, quis mollis tellus tristique. Duis aliquam sit amet ante ut ultrices. 
                        Etiam ornare dui quis dolor finibus, mattis vehicula diam suscipit.</p>
                </aside>
            </div>
        </article>
        
        <?php include('rodape.php');?>

    </body>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/Servicos.js"></script>
</html>
