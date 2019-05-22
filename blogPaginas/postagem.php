<!DOCTYPE html>
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
      <link rel="stylesheet" href="css/postagem.css">
      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" media="screen" href="../css/estiloPrincipal.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="../css/blogpagina.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="postagem.css" />
      <script src="js/blogpagina.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
      <script type="text/javascript" src="../js/dynamic-form.js"></script>
      <link rel="icon" href="../img/Principal/favicon.ico" type="image/x-icon">


      <title> Sistema | Criação de postagem </title> 

    </head>
    
    <body>
      <div class="container container-fluid" style="margin-top:50px; text-align: center;">
        <div class="row">

          <div class="col-md-9">
            <h1 class="titulo_secoes">
             Criando postagem
           </h1>
           <form method="POST" id="mainform" name="mainform" action="criaPostagem.php" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
              <label>Autor</label>
              <select class="form-control" id="autor" name="autor" required>
                <?php 
                include ('../db.class.php');
                $objDB = new db();
                $conn = $objDB->conecta_mysql();
                $query_select = "SELECT nome,idAutor from autor;";
                $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
                $rows = array();
                while($row = mysqli_fetch_array($result_select))
                $rows[] = $row;
                foreach($rows as $row){
                $nome = $row['nome'];
                $idAutor = $row['idAutor'];
                echo '<option value = '.$idAutor.'>'.$nome.'</option>';
              }
              ?> 
            </select>
          </div>
          <div class="form-group">
            <label for="tagSelecionada">Tags</label>
            <input type="text" class="form-control" id="tagSelecionada" placeholder="Digite as tags que deseja">
          </div>
          <div class="form-group">
            <label for="preview">Preview</label>
            <textarea class="form-control" id="preview" name="preview" placeholder="Preview para a home(720 caracteres total)" rows="10" maxlength="720"></textarea>
            </div>
            <div class="form-group">
              <label for="imgPreview">Preview imagem</label>
              <input type="file" class="form-control" id="imgPreview" name="imgPreview" placeholder="Preview para a home em imagem">
            </div>
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" class="inpForm"/ placeholder="Titulo da postagem">
            </div>

            <span id="myForm"></span>
            <div class="form-group">

              <input type="hidden" class="form-control" value ="0" id="quantidade" name="quantidade" >
    </div>

    <p></p><input type="submit" value="Pronto!">



          </form>
         
        </div>
         
        
        <div class="col-md-1" >
          <div class="adicionar " style="position:fixed">
              <img onclick="contactFunction()" class="icone_add" style="margin-top:20px;" src="Img/icon_texto.png">
              <img onclick="textareaFunction()" class="icone_add" style="margin-top:12px;" src="Img/img.png">  
              <img onclick="resetElements()" class="icone_add" style="margin-top:12px;" src="delete.png">  
            </div>
        </div> 
      
      </div>
      </div>
           


    </body>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/Servicos.js"></script>
</html>