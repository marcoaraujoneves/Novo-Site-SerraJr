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
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" media="screen" href="../css/estiloPrincipal.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../css/Servicos.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../css/blog.css" />
        <script src="../js/blog.js"></script>
        
        <link rel="icon" href="../img/Principal/favicon.ico" type="image/x-icon">
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

        <?php 
        include ('db.class.php');
        $objDB = new db();
        $conn = $objDB->conecta_mysql();
        $query_select = "SELECT titulo,data,preview,imgPreview from Postagem order by data desc;";
        $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
        $rows = array();
        while($row = mysqli_fetch_array($result_select))
            $rows[] = $row;
        foreach($rows as $row){
            $titulo = $row['titulo'];
            $data = $row['data'];
            $imgPreview = $row['imgPreview'];
            $preview = $row['preview'];
            echo '<div class="card">
            <h2 class="titpag">'.$titulo.'</h2>
            <h5 class="estilodata"><time>'.$data.'</time></h5>
            
            <div id="caixa_imagemPost">
            <img src="postagem/'.$titulo.'/'.$imgPreview.'" alt="Image" class="imagemPost">
            </div>

            <p class="textos">
            '.$preview.'
            </p>

            <div id="caixa_saiba_mais">
            <a href="postagem/'.$titulo.'/'.$titulo.'.php" class="saiba_mais" target="_blank">
            <b>Saiba Mais »</b>
            </a>
            </div>
            </div>';
        }
        ?>      
        

    </div>
    <div class="colunadireita">
        <div class="card">
            <h2 class="titpag2">Nossa História</h2>
            <a href="index.php#secaoSobre"><img src="Img/lateral/Capa-Facebook.png" alt="Image" class="imagem" id="imagem_sobre"></a>
            <a href="index.php#secaoSobre" class="link_texto"><p class="textos1">A Serra Jr. Engenharia, criada em 08 de maio de 2002, é uma empresa formada exclusivamente por alunos do curso de graduação de Engenharia...</p></a> 
        </div>
        <div class="card">
            <h3 class="titpag2">Destaques</h3>
            <a href="blogPagina_DesenhoTecnico.php"><img src="Img/lateral/noticia3.jpg" alt="Image" class="imagem"></a>
            <a href="blogPagina_AnaliseEstrutural.php"><img src="Img/lateral/noticia2.jpg" alt="Image" class="imagem"></a>
            <a href="blogPagina_EraMobile.php"><img src="Img/lateral/noticia1.jpg" alt="Image" class="imagem"></a>
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
