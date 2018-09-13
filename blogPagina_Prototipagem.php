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
        <title>Prototipagem 3D</title>
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
                    <h2 class="titulo m-0">Prototipagem 3D</h2>
                    <h5 class="estilodata"><time datetime="2018-08-03">03 de Setembro, 2018</time></h5>  
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Prototipagem/img1.png">
                    <p class="textos"> 
                        Você já deve ter ouvido falar em indústria 4.0 ou quarta revolução industrial, certo? E sobre prototipagem? 
                        Todos estes termos estão em evidência ultimamente e não é por acaso. A indústria 4.0 está sendo impactada pelos 
                        avanços da tecnologia de uma forma excepcional, e a prototipagem 3D é um desses motores dessa revolução. Caso 
                        ainda não esteja familiarizado com essa terminologia e com os avanços tecnológicos da quarta revolução industrial, 
                        venha com a gente que estamos prontos para te ajudar a entender e aplicar esses conceitos para a integração da sua 
                        empresa na Era Da Informação. 
                    </p>
                    <p class="textos">
                        Prototipagem é um termo que se refere a protótipo, que de forma simples e direta é um modelo simplificado do produto 
                        que está sendo desenvolvido. Pode ser feito em escala real, reduzida, ou mesmo em escala ampliada. Com os avanços 
                        tecnológicos recentes e o desenvolvimento da tecnologia de impressão 3D essa técnica vem sendo aprimorada e utilizada 
                        cada vez mais pela indústria ou até mesmo por usuários residenciais. A flexibilidade da prototipagem 3D é muito grande 
                        e nos permite fazer modelos em software CAD (Desenho auxiliado por computador) de alto grau de complexidade para serem 
                        impressos em impressora 3D. Uma vez feito o protótipo, este pode ser usado para diversas finalidades, como por exemplo: 
                        para verificar a funcionalidade de um produto/equipamento ou mecanismo; identificar erros de design e corrigi-los antes 
                        de começar a produção em massa; analisar estética e aplicabilidade; detectar a necessidade de implementação de uma nova 
                        funcionalidade ainda na etapa de projeto dentre outros. 
                    </p>
                    <p class="textos">
                        Você ainda pode estar se perguntando se vale realmente a pena investir nessa ferramenta e quais os benefícios diretos e 
                        indiretos dessa técnica. Uma vez que temos essa ferramenta ao nosso favor, é possível a redução de custo e melhoria de 
                        eficiência nos processos de produção da sua empresa. A identificação de erros na etapa de projeto pode levar a uma grande 
                        economia evitando retrabalho em uma fase mais avançada da produção. Nisso se inclui economia de matéria prima/redução de 
                        desperdício e melhor aproveitamento do tempo de trabalho dos funcionários. Se você ficou interessado nesse nicho e precisar 
                        de uma análise mais criteriosa em algum processo na sua empresa, entre em contato com a Serra Jr Engenharia, será um prazer 
                        trazer a sua empresa para mais perto dessa revolução.
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
                                        relampago Marquinhos cathau!! , *não esquecer de adicionar uma descrição depois*
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="links">
                        <h4>Postagens Relacionadas</h4>
                        <ul class="font-italic">
                        <li><a href="blogPagina_DesenhoTecnico.php">Desenho Técnico</a></li>
                        <li><a href="blogPagina_AnaliseEstrutural.php">Análise Estrutural</a></li>
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
