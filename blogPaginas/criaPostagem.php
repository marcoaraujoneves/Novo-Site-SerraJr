<?php

include ('../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();









    $data = date('d/m/Y \à\s H:i:s');
    echo $data;
    $quantidade =$_POST['quantidade'];
    $titulo =$_POST['titulo'];
    $preview =$_POST['preview'];
    $autor =$_POST['autor'];
    mkdir(__DIR__.'/postagem/'.$titulo.'/', 777, true);
    $imgPreview = $_FILES['imgPreview']['name'];
    echo $imgPreview;

    if(isset($_POST['titulo'])){
        $sql = "  
        INSERT INTO postagem(titulo,data,preview,imgPreview,codAutor)
        VALUES ('$titulo',now(),'$preview','$imgPreview','$autor') ";
        $results = mysqli_query($conn, $sql);
        $batata = $conn->insert_id;
        echo $sql;

    }
    $query_select = "SELECT nome,descricao,fotoPerfil from autor where idAutor = '$autor';";
    $result_select = mysqli_query($conn,$query_select);
    $rows = array();
    while($row = mysqli_fetch_array($result_select))
        $rows[] = $row;
    foreach($rows as $row){
        $nome = $row['nome'];
        $descricao = $row['descricao'];
        $fotoPerfil = $row['fotoPerfil'];

    }

    $vet = '';
    for ($i=1; $i <= $quantidade ; $i++) { 
       if (isset($_POST['id'.$i])) {
          $vet .= '<p class="textos"> '.$_POST['id'.$i].'</p>';
      }else{

       $vet .= '<img class="imagem_postagem m-3 d-block mx-auto img-fluid" src="'.$_FILES['id'.$i][ 'name' ].'">';
       $_FILES['id'.$i]['tmp_name'];  
       $filename = $_FILES['id'.$i]['name'];
$filesize = $_FILES['id'.$i]['size'];
$filetempname = $_FILES['id'.$i]['tmp_name'];
$fileext = strtolower($filename);
    // Pega a extensão
$extensao = pathinfo ( $filename, PATHINFO_EXTENSION );
    // Converte a extensão para minúsculo
$extensao = strtolower ( $extensao );
$fileext = strtolower($filename);
$galeriaProduto = $filename;
        // Concatena a pasta com o nome
$destino = 'postagem/'.$titulo.'/' . $galeriaProduto;
echo $destino;
        // tenta mover o arquivo para o destino
if ( @move_uploaded_file ( $filetempname, $destino ) ) {
    echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
    echo ' < img src = "' . $destino . '" />';
}
else
    echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';

}

}
//$batata = 'Batata';
$asp = "'";
$conteudo = '


<?php 
$path = $_SERVER["DOCUMENT_ROOT"];

$path .= "/siteserrajr/trunk";

include($path . "/blogpaginas/inicio.php");
 echo "<script>mudarTitulo('.$asp.''.$titulo.''.$asp.');</script>"; ?>
<article class="container-fluid px-5">
            <div class="row">
            <div class="col-md-9">
                
                    <h2 class="titulo m-0">'.$titulo.'</h2>
                    <h5 class="estilodata"><time>'.$data.'</time></h5>  
                    '. $vet.'
                    
                    

                    
                    <div class="card bg-light my-3 p-3">
                        <div class="row no-gutters">
                            <div class="mx-auto">
                                <img id="foto_autor" class="img-fluid vertical-center mx-3 border" src="../../Img/Autores/'.$fotoPerfil.'">
                            </div>
                            <div class="col-md">
                                <div class="card-block p-3">
                                    <p style="text-align: right ; font-size: 13px ; font-weight: 600; padding:0 ;  " >Autor</p>
                                    <h3 class="card-title" id="nome_autor">'.$nome.'</h3>
                                    <p class="textos">
                                        '.$descricao.'
                                    </p>
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
            </div>
                <div class="col-md-3">
                <div class="card">
                    <h2 class="titpag2">Nossa História</h2>
                    <a href="index.php#secaoSobre"><img src="../../Img/lateral/Capa-Facebook.png" alt="Image" class="imagem" id="imagem_sobre"></a>
                    <a href="index.php#secaoSobre" class="link_texto"><p class="textos1">A Serra Jr. Engenharia, criada em 08 de maio de 2002, é uma empresa formada exclusivamente por alunos do curso de graduação de Engenharia...</p></a> 
                </div>
                <div class="card">
                    <h3 class="titpag2">Destaques</h3>
                    <a href="blogPagina_DesenhoTecnico.php"><img src="../../Img/lateral/noticia3.jpg" alt="Image" class="imagem"></a>
                    <a href="blogPagina_AnaliseEstrutural.php"><img src="../../Img/lateral/noticia2.jpg" alt="Image" class="imagem"></a>
                    <a href="blogPagina_EraMobile.php"><img src="../../Img/lateral/noticia1.jpg" alt="Image" class="imagem"></a>
                </div>
                <div class="card">
                    <h3 class="titpag">Espaço para mais alguma coisa</h3>
                    <br>
                    <p class="textos">Textinho...</p>
                </div>
            </div>
                
            </div>
        </article>



        
        <?php 


        include($path .  "/blogpaginas/rodape.php");
        ?>


        <script src="../../../js/popper.min.js"></script>
        <script src="../../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../js/Servicos.js"></script>
        </html>
        ';
file_put_contents('postagem/'.$titulo.'/'.$titulo.'.php', $conteudo)
     //   if(file_put_contents(''.$titulo.'.php', $conteudo)){

         //   header("Location: postagem.php"); /* Redirect browser */
         //   exit();

       // }
        ?>