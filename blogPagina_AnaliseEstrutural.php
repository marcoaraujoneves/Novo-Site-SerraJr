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
        <title>Análise Estrutural</title>
    </head>

    <body>
        
        <?php include('Layout/_include/menu.php');?>

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
                    <h2 class="titulo m-0">Análise estrutural</h2>
                    <h5 class="estilodata"><time datetime="2018-08-03">03 de Agosto, 2018</time></h5>  
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Análise estrutural/img.jpg">
                    <p class="textos"> 
                        Esta é uma área fundamental na engenharia e no desenvolvimento de projetos. Toda estrutura, peça, mecanismo, máquina, equipamento 
                        ou seja qual for o componente, deve ter bem definidos alguns aspectos:
                        qual o objetivo(o que o objeto precisa fazer), como(como deve funcionar), 
                        para que será utilizado(ou quem), em que condições de operação ele vai trabalhar (temperatura, vento, 
                        oxidação), qual carga vai suportar(peso) etc. Esses parâmetros quando bem definidos podem ajudar
                        a construir um projeto conceitual mais detalhado e atento as necessidades do cliente.
                        Um bom projeto é aquele que atende ao objetivo proposto em sua concepção, da melhor maneira possível,
                        de forma mais eficiente, com menos custo e por aí vai. 
                    </p>
                    <p class="textos">
                        A análise estrutural (ou simulação) é uma ferramenta de grande utilidade dentro do processo de projeto para torna-lo mais robusto 
                        em termos de planejamento e consequentemente um bom projeto. Com ela é possível simular esforços mecânicos 
                        e comportamentos do material/estrutura antes mesmo da finalização do projeto ou construção do protótipo. 
                        Como saber qual a carga (quanto peso) um material suporta? Qual a espessura de tubo deve ter nos pés da minha cadeira?
                        A resposta é: Depende! É preciso primeiro definir parâmetros e refazer a pergunta. Qual a espessura de tubo deve ter nos 
                        pés da minha cadeira para que ela aguente uma pessoa de 140Kg utilizando um aço x? Será que posso reduzir o tamanho/peso usando outro tipo de aço?  
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Análise estrutural/img1.png">

                    <p class="textos">
                        Existem vários métodos de cálculo desenvolvidos na literatura (mecânica dos materiais) para cálculos estruturais e
                        dimensionamento de projetos, tais cálculos tendem a ficar mais complicados e onerosos conforme a geometria 
                        vai ficando mais complexa e conforme vamos aumentando a quantidade de componentes de uma estrutura. 
                        É aí que entra a simulação computacional por meio do método de elementos finitos. Este método amplamente 
                        usado em diversos setores industriais possibilitam a obtenção de resposta para inúmeros problemas de 
                        engenharia. Nele a geometria é subdividida em pequenas partes(elementos) e essa subdivisão permite 
                        resolver um problema complexo em problemas mais simples, o que possibilita o computador realizar essa tarefa 
                        com eficiência. Quanto menor for o tamanho desses elementos e maior quantidade deles, dizemos que mais 
                        refinada está a malha e maior a precisão da análise. 
                    </p>
                   
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Análise estrutural/img2.png">

                    <p class="textos">
                        O uso de métodos computacionais para analise de estruturas veio para facilitar e agilizar o desenvolvimento de projetos. 
                        Com isso é possível otimizar o tempo, custos (menor desperdício com testes de falha uma vez que é possível 
                        prever a falha na simulação e redimensionar o projeto antes mesmo de fazer o protótipo), e tudo isso 
                        resulta em economia, eficiência, agilidade e confiabilidade para que o produto atenda aos requisitos 
                        exigidos e seja considerado um bom projeto. Precisa de uma análise desse tipo em algum produto da sua 
                        empresa? Entre em contato com a gente!
                    </p>
                   
                    <div class="links">
                        <h5 style="text-align: center" >Referências</h5>
                        <ol>
                            <li> <a href="#">http://pocketnow.com/2014/07/28/the-evolution-of-the-smartphone</a></li>
                            <li> <a href="#">https://www.thesnugg.com/a-brief-history-of-smartphones.aspx</a></li>
                            <li> <a href="#">https://blog.bemmaisseguro.com/historia-do-smartphone/</a></li>
                            <li> <a href="#">http://tecnologia.culturamix.com/eletronicos/a-historia-da-smartphones</a></li>
                            <li> <a href="#">https://blog.trocafone.com/evolucao-dos-smartphones-como-tudo-comecou/</a></li>
                            <li> <a href="#">https://www.tecmundo.com.br/internet/3624-a-historia-dos-tablets.htm</a></li>
                            <li> <a href="#">http://searchmobilecomputing.techtarget.com/definition/tablet-PC</a></li>
                            <li> <a href="#">http://www.seomaster.com.br/blog/a-era-mobile-repense-sua-estrategia</a></li>
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
                            <li><a href="#">Postagem 0 - Lorem Ipsum</a></li>
                            <li><a href="#">Postagem 1 - Dolor Sit Amet</a></li>
                            <li><a href="#">Postagem 2 - Consectetur Adipiscing Elit</a></li>
                            <li><a href="#">Postagem 3 - Nunc Posuere Lobortis Volutpat</a></li>
                            <li><a href="#">Postagem 4 - Morbi Posuere, Risus Ut Tincidunt Feugia</a></li>
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
        <?php include('Layout/_include/rodape.php');?>
    </body>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>
