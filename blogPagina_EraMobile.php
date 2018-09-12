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
        <title>A Era Mobile</title>
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
                    <h2 class="titulo m-0">A Era Mobile</h2>
                    <h5 class="estilodata"><time datetime="2018-08-03">03 de Agosto, 2018</time></h5>  
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Era Mobile/img.jpg">
                    <p class="textos"> 
                        Por volta dos anos 1990, após maior difusão dos computadores, principalmente no ramo empresarial,
                        surgiu uma crescente demanda por aparelhos móveis que tivessem as algumas das principais funções dos PCs,
                        como ler e enviar e-mails, manter agendas, gerenciar planilhas e até controlar remotamente um computador,
                        no intuito de conseguir mais produtividade.
                    </p>
                    <p class="textos">
                        Nesta época surgiram os primeiros PDAs (Personal Digital Assistant), que inovaram a forma de trabalhar,
                        possibilitando acesso móvel a programas e mais conectividade. tellus commodo at.
                    </p>
                    <p class="textos">
                        Hoje, mais de 20 anos depois, é comum em qualquer lugar observar pessoas, das mais variadas classes,
                        mexendo em seus aparelhos móveis, podendo entrar em contato com qualquer lugar do mundo em questão de
                        segundos, utilizando aplicativos robustos em dispositivos cada vez mais poderosos,
                        muitos dos quais são mais potentes do que os computadores utilizados à época dos seus antecessores.
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Era Mobile/img1.jpg">

                    <p class="textos">
                        Uma ampla gama de dispositivos móveis está disponível hoje no mercado, dentre eles se destacam os 
                        tablets e smartphones. Ambos os aparelhos são relativamente novos no mercado, e decorrem de uma grande
                        busca por mobilidade, que vem desde a época dos PDAs. Mas o que exatamente são estes dispositivos?
                    </p>
                    <p class="textos">
                        Um smartphone é dispositivo que une os serviços tradicionais de um celular com muitas das funções de um 
                        computador, como acesso à internet através de redes de telefonias, aplicativos, jogos, câmera, músicas.
                        Hoje este dispositivo é basicamente uma central de conexão e entretenimento,
                        garantindo acesso a praticamente todo o mundo digital.
                    </p>
                    <p class="textos">
                        Foi com os smartphones que as telas dos celulares começaram a crescer, tanto por facilidade de uso,
                        quanto por novas funcionalidades, como os jogos e vídeos, que necessitam de telas maiores para melhor 
                        experiência e qualidade de visualização.
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Era Mobile/img2.jpg">

                    <p class="textos">
                        Já os tablets são uma espécie de computador pessoal portátil, sem fios e com uma interface touchscreen, 
                        com tela geralmente maior que a de um smartphone e menor do que um notebook. Alguns têm a opção de utilizar 
                        redes de telefonia através de chips, como um celular. Outros adicionais comumente usados são teclado e mouse externos,
                        que possibilitam mais agilidade para determinadas tarefas.
                    </p>
                    <p class="textos">
                        Existem algumas variações de tablet, incluindo os chamados 2 em 1, que são praticamente notebooks, porém com tela removível que 
                        funciona independentemente e os híbridos, que são semelhantes aos 2 em 1, porém com tela fixa, que gira em torno de um eixo e pode 
                        ser abaixada sobre o teclado, deixando apenas a tela exposta. 
                    </p>
                    
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Era Mobile/img3.jpg">

                    <p class="textos">
                        Com o crescente poder de processamento nos aparelhos, aliado às ampliações e barateamento das tecnologias de rede e telefonia para dispositivos móveis,
                        houve um grande boom no setor. Só no Brasil, segundo a Fundação Getúlio Vargas – FGV, há mais de 200 milhões de aparelhos mobile em uso.
                        No mundo, segundo a GSMA, são mais de 5 bilhões de smartphones atualmente.
                    </p>
                    <p class="textos">
                        Isso também gerou um boom nos serviços direcionados a esta plataforma, desde o desenvolvimento de aplicativos de uso cotidiano, como agendas,
                        blocos de notas, calendários, até serviços mais robustos como jogos, redes sociais, reservas, plataformas de ensino à distância,
                        entre outros milhares.
                    </p>
                    <p class="textos">
                        O impacto no mercado foi tão grande, que praticamente todos os serviços lançados para computadores, possuem uma versão mobile,
                        e muitos, principalmente jogos e redes sociais, foram desenvolvidos somente para esta plataforma, como o Instagram,
                        Snapchat e o Flappybird.
                    </p>
                    <p class="textos">
                        Na Web a mudança também foi grande, com sites e sistemas tendo de se adaptar cada vez mais para serem responsivos,
                        ou seja, oferecerem boas condições de visualização e usabilidade em qualquer dispositivo que os acessem, 
                        seja num smartphone, tablet ou computador. Afinal, ainda em 2015, os acessos à Internet, 
                        a partir de dispositivos móveis, ultrapassaram os acessos feitos a partir de Desktops.
                    </p>

                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/paginas/Era Mobile/img4.jpg">

                    <p class="textos">
                        Como dito acima, milhões de brasileiros tem um aparelho móvel, e estes aparelhos conferem mais praticidade e conectividade no dia-a-dia,
                        com a difusão cada vez maior da internet, sendo o acesso a esta muitas vezes mais simples e barato ao
                        usuário do que à telefonia, os usuários mobile estão conectados praticamente o dia todo. Logo, 
                        o uso destes aparelhos se tornou uma necessidade também para buscar serviços e produtos online,
                        quase sempre buscando por esses na rede antes de buscar fisicamente.
                    </p>
                    <p class="textos">
                        Com isto surgiu, em todos os setores, uma crescente demanda por opções mobile, sejam lojas virtuais,
                        aplicativos próprios com informações, dentre outras variadas opções.
                    </p>
                    <p class="textos">
                        Então, para que seu negócio tenha uma boa visibilidade, e ofereça aos clientes métodos rápidos e
                        práticos de acesso às informações que eles desejam, é quase obrigatório que você recorra às 
                        soluções mobile. Seja um site responsivo, um aplicativo, a quantidade de opções de funcionalidades e diferenciais é enorme.
                    </p>
                    <p class="textos">
                        Se tornando mobile, sua empresa sempre estará à frente, terá mais visibilidade, podendo atrair mais
                        clientes e ganhando muito mais relevância no mercado. 
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
                            <li><a href="blogPagina_HistoriaAndroid.php">A História Do Android</a></li>
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
</html>
