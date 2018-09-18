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
        <title>Desenho Técnico</title>
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
        <article class="container-fluid px-5">
            <div class="row">
                <div class="col-md-8 text-justify mt-5 pl-md-5">
                    <h2 class="titulo m-0">Desenho Técnico</h2>
                    <h5 class="estilodata"><time datetime="2018-08-03">03 de Agosto, 2018</time></h5>  
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Desenho Tecnico/img.jpg">
                    <p class="textos"> 
                        PORQUE SOLICITAR O DESENHO TÉCNICO DE UMA MÁQUINA QUE JÁ EXISTE? É UM BOM NEGÓCIO?
                    </p>
                    <p class="textos">
                        A indústria no Brasil já começou com máquinas sendo compradas de países que deram início ao seu processo 
                        de industrialização bem antes. Nessa direção, depois de mais ou menos 100 anos da industrialização, o 
                        Brasil ainda não se desprendeu dessa política de utilizar máquinas ultrapassadas. Segundo a ABIMAQ 
                        (Associação Brasileira da Indústria de Maquinas e Equipamentos), a idade média das máquinas na indústria 
                        brasileira é 17 anos, três vezes mais antigas quando comparada com países que investem forte em tecnologia. Até este ponto não há problemas porque as máquinas não morrem, a questão é que seu desempenho vai diminuindo.  
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Desenho Tecnico/img1.png">

                    <p class="textos">
                        Em contrapartida, nas máquinas que não possuem desenho técnico, sua manutenção é mais demorada, não é efetiva
                        porque se perde tempo tentando entender as dimensões e especificações de suas peças e/ou equipamentos, ou
                        até mesmo não é realizada a manutenção o que acarreta problemas como:
                    </p>
                    <p class="textos">
                        •	Redução da vida útil dos equipamentos industriais: um equipamento que não passa por manutenções 
                        periódicas só vai apresentar sinais de que suas peças precisam ser trocadas quando todo seu funcionamento 
                        está desgastado. Quando isso acontece, é quase impossível recuperar a máquina e a empresa acaba por ter que 
                        trocá-la por uma nova.
                    </p>
                    <p class="textos">
                        •	Queda na qualidade dos produtos fabricados: máquinas que não funcionam corretamente são incapazes de garantir 
                        excelência em seus processos, o que acaba ocasionando erros de produção. Se o produto não sai como esperado na 
                        primeira linha, será necessário produzir uma nova demanda e aí o custo aumenta consideravelmente.
                    </p>
                    <p class="textos">
                        •	Risco a segurança dos funcionários: equipamentos com problemas podem sofrer sobrecargas elétricas, 
                        explodir, soltar peças, enquanto estiverem em uso e oferecer risco à integridade física dos colaboradores da 
                        empresa.                     
                    </p>
                    <p class="textos">
                        •	Maior demanda de trabalho: quando uma máquina quebra e não pode manter sua operação, a qualidade da produção 
                        cai e o número de produtos entregues também é prejudicado. Para que a empresa mantenha o ritmo de trabalho e 
                        alcance suas metas, a demanda de trabalho precisa aumentar. Funcionários fazem horas extras e novos funcionários 
                        são contratados, aumentando assim a demanda de trabalho e as despesas da empresa.                    
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Desenho Tecnico/img2.jpg">

                    <p class="textos">
                        Todos os problemas citados acabam levando a empresa para o que possa ser o maior de todos: o aumento dos 
                        custos. A perda de produção, por causa de máquinas paradas, a troca de máquinas que deveriam durar mais 
                        tempo, a queda na qualidade dos produtos produzidos, equipes que precisam parar seus trabalhos ou aumentar 
                        suas cargas horárias para garantir que os produtos sejam entregues e acidentes com funcionários, são apenas 
                        alguns dos problemas que podem aumentar consideravelmente os custos de uma empresa.                   
                    </p>
                    <p class="textos">
                        Contudo, é importante ter o desenho para fazer a manutenção, corretivas ou preventivas, das máquinas. Com a 
                        manutenção certa é possível aumentar o rendimento, preservar os sistemas e diminuir os desperdícios.                  
                    </p>

                    <div class="links">
                        <h5 style="text-align: center" >Referências</h5>
                        <ol>
                            <li>Referência - <a href="#">www.exemplo.com</a></li>
                            <li>Referência - <a href="#">www.exemplo.com</a></li>
                            <li>Referência - <a href="#">www.exemplo.com</a></li>
                            <li>Referência - <a href="#">www.exemplo.com</a></li>
                            <li>Referência - <a href="#">www.exemplo.com</a></li>
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
                            <li><a href="blogPagina_Prototipagem.php">Prototipagem</a></li>
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
