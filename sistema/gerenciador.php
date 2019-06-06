<!DOCTYPE html>
<style type="text/css" media="screen">

    .imgTable{
      max-width:100px;
      max-height: :100px;
  }


</style>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Interface</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</head>

<?php
//include "BarraNavegacao.php";
include "sidebar.php";
?>
<main class="page-content">
<div id="containerAlert"></div>
    <div class="card-deck">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: auto;display:inline-block; height:auto;">
                    <img class="card-img-top" src="img/gerenciador/diretoria.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Foto diretoria</h5>
                        <p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
                        <button type="button" class="btn btn-danger" id="btnSobre" data-toggle="modal" data-target="#modalDiretoria">Editar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: auto;display:inline-block; height:auto;">
                    <img class="card-img-top" src="img/gerenciador/missao.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Missao,Visão e Valores</h5>
                        <p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
                        <button type="button" class="btn btn-primary" id="btnMissao" data-toggle="modal" data-target="#modalMissao">Editar</button>
                    </div>
                </div>
            </div>
        </div>




    </div>

</main>
<!-- Modal para editar as fotos iniciais - Diretoria e afins -->
<div class="modal fade" id="modalDiretoria" tabindex="-1" role="dialog" aria-labelledby="modalDiretoriaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Foto Diretoria </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyDiretoria">
                <form method="post" id="formDiretoria" enctype="multipart/form-data">

                    <input  type='file' name="arquivo" id="arquivo" />
                    

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="salvarDiretoria" >Salvar</button>
                    <button type="button" class="btn btn-secondary" id="returnDiretoria" data-dismiss="modal">Fechar</button>
                </form>
            </div>
        </div>
    </div> 
</div>


<!-- Modal de Edição da Seção Sobre Nós -->
                    <div class="modal fade" id="modalMissao" tabindex="-1" role="dialog" aria-labelledby="modalMissaoTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                                    <h5 class="modal-title" id="exampleModalLongTitle"> Editar Sobre Nós </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="bodyMissao">
                                    <form id="formMissao" method="POST">
                                        <div class="container-fluid">
                                           
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="textoMissao"> Missao: </label>
                                                    <textarea class="inpForm" id="textoMissao" name="textoMissao" rows="10" maxlength="720" placeholder="Máximo de 720 caracteres" autocomplete="off"></textarea>
                                                    <label for="textoVisao"> Texto Sobre a TMF: </label>
                                                    <textarea class="inpForm" id="textoVisao" name="textoVisao" rows="10" maxlength="720" placeholder="Máximo de 720 caracteres" autocomplete="off"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="salvarMissao" >Salvar</button>
                                    <button type="button" class="btn btn-secondary" id="returnMissao" data-dismiss="modal">Fechar</button>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- Modal de Edição da Seção Serviços -->





<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/gerenciador.js"></script>
<script src="js/popper.min.js.js"></script>

</body>
</html>