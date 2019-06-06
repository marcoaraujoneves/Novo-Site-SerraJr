


<?php 
$path = $_SERVER["DOCUMENT_ROOT"];

$path .= "/siteserrajr/trunk";

include($path . "/blogpaginas/inicio.php");
 echo "<script>mudarTitulo('');</script>"; ?>
<article class="container-fluid px-5">
            <div class="row">
            <div class="col-md-9">
                
                    <h2 class="titulo m-0"></h2>
                    <h5 class="estilodata"><time>04/06/2019 às 04:14:39</time></h5>  
                    
                    
                    

                    
                    <div class="card bg-light my-3 p-3">
                        <div class="row no-gutters">
                            <div class="mx-auto">
                                <img id="foto_autor" class="img-fluid vertical-center mx-3 border" src="../../Img/Autores/">
                            </div>
                            <div class="col-md">
                                <div class="card-block p-3">
                                    <p style="text-align: right ; font-size: 13px ; font-weight: 600; padding:0 ;  " >Autor</p>
                                    <h3 class="card-title" id="nome_autor"></h3>
                                    <p class="textos">
                                        
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
                $path = $_SERVER["DOCUMENT_ROOT"];

                $path .= "/siteserrajr/trunk";

                include($path .  "/blogpaginas/rodape.php");
                ?>


                <script src="../../../js/popper.min.js"></script>
                <script src="../../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../js/Servicos.js"></script>
        </html>
        