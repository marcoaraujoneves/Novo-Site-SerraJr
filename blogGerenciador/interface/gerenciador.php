<html>
<head>
  <title> serrajr | Gerenciador de Postagens </title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-6">
        <form id="frm-cad-aluno">
          <div class="form-group">
            <input type="hidden" name="action" value="NOVA_POSTAGEM">
            <input type="text" class="form-control" name="nome" placeholder="Nome da postagem...">
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-primary" id="btn-cad-postagem">Cadastrar</button>     
          </div>
        </form>                   
      </div>
      <div class="col-sm-6">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <td>Id da postagem </td>
              <td>Titilo </td>
              <td>data</td>
              <td>codigo do autor</td>
            </tr>
            <tbody id="lista-alunos"></tbody>
          </table>
        </div>
      </div>
    </div>  
  </div>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $(document).on('click','#btn-cad-postagem',function(){
        cadastraPostagem();
      });
      listaPostagem(); 
    });
    $(document).ready(function(){
      $(document).on('click','#btn-deleta-Postagem',function(){
        idPostagem = $(this).attr("value"); 
        deletaAluno(idPostagem);
      });
      listaPostagem(); 
    });
    function cadastraPostagem()
    {
      var dados = $("#frm-cad-postagem").serializeArray();
      $.post('../controlador/postagem.php',dados,function(retorno){
        alert("Postagem Cadastrada");
        listaPostagem(); 
      }, 'json');

    }
    function deletaAluno(matricula)
    {
      $.post('../controlador/postagem.php',{action:'DELETA_POSTAGEM',idPostagem:idpostagem},function(retorno){
        alert("Postagem Deletada");
        listaUsuario(); 
      }, 'json');
    }
    function listaPostagem(){
      $.post('../controlador/postagem.php',{action:'LISTA_POSTAGENS'},function(Postagens){

        var lista = '';
        $.each(alunos,function(indice,aluno){
          lista += '<tr>';
          lista += ' <td>'+postagem.idPostagem+'</td>';
          lista += ' <td>'+postagem.titulo+'</td>';
          lista += ' <td>'+postagem.data+'</td>';
          lista += ' <td>'+postagem.idAutor+'</td>';
          lista += '<td><button type="button" id="btn-deleta-postagem" name="btn-deleta-postagem" value="'+aluno.idPostagem+'" class="btn btn-danger">Deletar</button></td>';
          lista += '</tr>';
        });
        $('#lista-postagens').empty();
        $('#lista-postagens').append(lista);
      },'json');
    }
  </script>
</body>
</html>