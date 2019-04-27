<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Index.php");
    exit;
}
?>

<!DOCTYPE html>
<style type="text/css" media="screen">

.imgTable{
  max-width:100px;
  max-height: :100px;
}

       
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema/Slides</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/Slides.css"/>
</head>

<?php
//include "BarraNavegacao.php";
include "sidebar.php";
?>
<main class="page-content">
<!-- Botão utilizado para cadastrar um slide, no inicio da pagina  -->
<div class="container">
<div style="text-align: center;">
            <button data-toggle="modal" data-target="#Cadastrar" id="slider" class="btn btn-lg BotaoCadastra">Cadastrar Slide</button>
        </div>
</div> 
<!-- Inicio da Tabela onde vai gerar todos os slides cadastrados -->
<table  class="table table-striped table-dark table-hover " style="width:1000px;" id="tb1">
    <thead >
        <tr >
            <th></th>
            <th width='50px' >Código</th>
            <th>Descrição</th>
            <th width='200px'>Link</th>
            <th style="text-align:center;">Operação</th>
        </tr>
    </thead>
    <tbody>
<!-- Foi utilizado um foreach para pegar e gerar os dados de cada slide. O fechamento de aspas e . são utilizados para concatenar o php com html-->
        <?php 

        require_once __DIR__.'/connect.php';
        $query_select = "SELECT * FROM slide;";
        $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
        $rows = array();
        while($row = mysqli_fetch_array($result_select))
            $rows[] = $row;
        foreach($rows as $row){ 
            $codSlide = $row['CodSlide'];
            $sobre = $row['sobre'];
            $linkSlide = $row['linkSlide'];
            $extensao = $row['extensao'];
            echo '<tr class="odd gradeX">';
            echo '<td><img src="../Img/slider/'.$codSlide.'.'.$extensao.'" class="ImgTd "></td>';
            echo '<td>'.$codSlide.'</td>';
            echo '<td>'.$sobre.'</td>';
            echo '<td >'.$linkSlide.'</td>';
            echo '<td><button class="btn Botao" data-toggle="modal" id="deletaSlide" data-target="#Excluir" value="'.$codSlide.'.'.$extensao.'" type="button">Excluir</button>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
<!-- Fim da tabela gerada com o php -->


<!-- Modal utilizado para excluir um slide. O botão é gerado na tabela pelo php, onde clicando no botão o codigo do slide é utilizado para excluir o mesmo -->
<div style="margin-top:12%;" class="modal" id="Excluir" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(44,40,76);">
                <h5 class="modal-title" style="color:white;">Deseja realmente excluir?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>A exclusão será permanente.</p>
            </div>
            <div class="modal-footer" >
                <form  method="post">
                   <input type="button" name="excluirSlide" id="excluirSlide" value="Excluir" class="btn Botao">
                   <button type="button" class="btn Botao" data-dismiss="modal">Fechar</button>
               </form>
           </div>
       </div>
   </div>
</div>



<!-- Usando o botão no inicio da pagina, o modal de cadastro vai aparecer, salvando uma imagem nova para o slider -->
<div  class="modal" id="Cadastrar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(44,40,76);">
                <h5 class="modal-title" style="color:white;">Cadastramento de foto?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <!-- Enctype é utilizado para salvamento da imagem -->
                            <form method="post" enctype="multipart/form-data"  id="formSlider" >
					<input  type='file' name="arquivo" id="arquivo" />
					<img class = "imgTable" id="blah" src="#" alt="your image" />
					<div class="form-group">
                                        <label for="nomeSlider">Nome</label>
                                        <input type="text" name="nomeSlider" id="nomeSlider" required  class="form-control"/>
                                        <label for="linkSlider">Link</label>
                                        <input type="link" name="linkSlider" id="linkSlider" required class="form-control"/>
                                  </div>
                                  <div>
                                        <input type="submit" class="btn btn-success" id="batatas" name="batatas" value="Enviar"/>
                                        <button type="button" class="btn btn-secondary" id="returnServico" data-dismiss="modal"> Cancelar </button>
                                  </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<script src="Javascript/jquery-3.3.1.js"></script>
<script src="Javascript/jquery.validate.min.js"></script>
<script src="Javascript/Slides.js"></script>


</body>
</html>