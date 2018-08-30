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
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar postagens..." aria-label="Pesquisar postagens...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
            </div>
        </nav>
        <!-- ====================== FIM (2) ======================= -->
        <article class="container-fluid px-5">
            <div class="row">
                <div class="col-md-8 text-justify mt-5 pl-5">
                    <h2 class="titulo m-0">LOREM IPSUM</h2>
                    <h5><time datetime="2018-08-03">03 de Agosto, 2018</time></h5>  
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/img/noticia0.jpg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lobortis volutpat. 
                            Morbi posuere, risus ut tincidunt feugiat, risus ante cursus tellus, et finibus enim nisl et purus. 
                            Aliquam accumsan, tellus at mollis consequat, ante metus aliquet metus, eget accumsan massa orci quis risus. 
                            Aliquam erat volutpat. Donec sit amet porttitor orci. Fusce commodo sapien ac lorem blandit, a suscipit purus malesuada. 
                            Curabitur vestibulum turpis ut lorem vestibulum, quis mollis tellus tristique. Duis aliquam sit amet ante ut ultrices. 
                            Etiam ornare dui quis dolor finibus, mattis vehicula diam suscipit.</p>
                    <p>Donec finibus ex vitae malesuada tristique. Cras massa mi, sodales vitae mattis eu, fringilla at leo. 
                            Sed nec mollis ante. Vestibulum pellentesque erat orci, a sodales est condimentum id. 
                            Nulla sed urna non lectus vestibulum malesuada. Morbi purus nisl, placerat a finibus vel, hendrerit non odio. 
                            Integer bibendum elit id lorem commodo placerat. Quisque congue lacus vitae augue aliquam accumsan. 
                            Maecenas vitae magna porttitor lacus feugiat suscipit vel quis ante. 
                            Nullam sagittis turpis feugiat purus aliquam fringilla non eu erat. 
                            Suspendisse interdum, felis id lobortis pharetra, elit magna tincidunt quam, a vehicula dui nisl ut quam. 
                            Duis felis sem, suscipit nec porta et, ultricies id nulla. In porttitor ultrices erat, ac interdum tellus commodo at.</p>
                    <p>Phasellus aliquet, purus vitae mollis congue, dolor eros bibendum tellus, sed dapibus mauris mi ac odio. 
                            Duis auctor felis eget risus fermentum mattis. Nulla eu massa venenatis, ornare nunc quis, fringilla massa. 
                            Mauris tincidunt sit amet quam lobortis molestie. Curabitur felis est, posuere nec ipsum vitae, tristique finibus tellus. 
                            Vivamus porttitor elit non ante tristique fermentum. Sed eleifend quam non est fermentum, eleifend sagittis augue dapibus. 
                            Pellentesque nisl metus, tincidunt sit amet nisi ut, volutpat vehicula dui. 
                            Fusce a ante sit amet est vehicula congue non quis odio. Ut porttitor ex id nibh aliquam molestie. 
                            Donec ut ligula facilisis, iaculis nulla non, luctus nisi.</p>
                    <img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="img/Blog/img/noticia2.jpg">
                    <p>Sed lacinia auctor varius. Ut auctor nisi quis est luctus molestie. 
                            Pellentesque ut semper nunc. Nulla accumsan lectus risus, et suscipit nunc suscipit sit amet. 
                            Pellentesque luctus lorem quis diam pharetra porttitor. Curabitur hendrerit massa vel mi auctor sollicitudin sit amet nec sem. 
                            Suspendisse ac leo vel urna elementum malesuada quis eget tortor. Nullam nec vulputate dolor. 
                            Proin enim lacus, finibus a magna vitae, tristique vestibulum libero. 
                            Mauris lacinia lorem nec mauris fermentum, in pharetra velit ornare. Donec tincidunt volutpat varius. 
                            Curabitur non risus id ante tincidunt ultricies id quis ex. Proin nec blandit ex. Pellentesque ullamcorper libero sed felis rutrum dapibus.</p>
                    <p>Quisque convallis sapien justo, eget laoreet felis feugiat at. Aenean accumsan massa eget pharetra tincidunt. 
                            Proin ac est sit amet nisl facilisis viverra. 
                            Donec eget suscipit magna, vel tincidunt purus. Pellentesque sit amet vestibulum elit. 
                            Nullam convallis, tortor commodo tempor vulputate, erat sem euismod quam, pretium dictum ipsum arcu at massa. 
                            Proin at elit a libero vulputate blandit ut at arcu. Donec varius orci at neque pellentesque luctus. 
                            Fusce maximus faucibus mollis. Sed hendrerit dui ac elit feugiat, in semper leo aliquam. </p>
                    
                    <div class="links">
                        <h5>Referências</h5>
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
                                <img id="foto_autor" class="img-fluid vertical-center mx-3 border" src="img/Blog/img/autor.png">
                            </div>
                            <div class="col-md">
                                <div class="card-block p-3">
                                    <h3 class="card-title" id="nome_autor">Fulano da Silva</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lobortis volutpat. 
                                                Morbi posuere, risus ut tincidunt feugiat, risus ante cursus tellus, et finibus enim nisl et purus. 
                                                Aliquam accumsan, tellus at mollis consequat, ante metus aliquet metus, eget accumsan massa orci quis risus. 
                                                Aliquam erat volutpat. Donec sit amet porttitor orci. Fusce commodo sapien ac lorem blandit, a suscipit purus malesuada. 
                                                Curabitur vestibulum turpis ut lorem vestibulum, quis mollis tellus tristique. Duis aliquam sit amet ante ut ultrices. 
                                                Etiam ornare dui quis dolor finibus, mattis vehicula diam suscipit.</p>
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
                <aside id="lateral" class="col-md-3 text-justify mt-5 pr-5">
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
        
    </body>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>
