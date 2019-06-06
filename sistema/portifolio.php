
<?php
//include "BarraNavegacao.php";
include "sidebar.php";
?>
<main class="page-content">
<div id="containerAlert"></div>
<h1 class="titulo_secoes"> Produtos </h1>
				<p>
					<br>
					A tabela abaixo contém todos os produtos cadastrados no sistema! 
					Para Inserir, Deletar ou Editar basta clicar no respectivo botão e inserir as informações necessárias 
					para cada procedimento.
				</p>


				<div class="container">
					<div class="row">
						<div class="col-md-4 offset-md-4">
							<button data-toggle="modal" data-target="#cadastrarPortifolio" id="cadastraPortifolio" class="mx-auto d-block btn btn-lg BotaoCadastra">Cadastrar Portifolio</button>
						</div>
					</div>
				</div>
				<br>
				<div class="table-responsive">
					<table  class="table table-striped table-hover Tabela" id="tb1">
						<thead >
							<tr>
								<th style="width:6%;"> # </th>
								<th style="width:25%;"> Nome </th>
								<th style="width:36%;"> Descrição </th>
								<th style="width:17%;text-align:center"> Status </th>
								<th style="width:15%;">  </th>
							</tr>
						</thead>
						<tbody>
							<!-- Foi utilizado um foreach para pegar e gerar os dados de cada slide. O fechamento de aspas e . são utilizados para concatenar o php com html-->
							<?php 
							include ('connect.php');
							$query_select = "SELECT * FROM portifolio;";
							$result_select = mysqli_query($conn,$query_select) or die(mysql_error());
							$rows = array();
							
							while($row = mysqli_fetch_array($result_select))
								$rows[] = $row;
							foreach($rows as $row){ 
								
								$codPortifolio = $row['codPortifolio'];
								$nome = $row['nome'];
								$status = $row['status'];
								$descricao = $row['descricao'];
								echo '<tr class="odd gradeX">';
								
								echo '<td>'.$codPortifolio.'</td>';
								echo '<td>'.$nome.'</td>';
								echo '<td>'.substr($descricao,0,120).'</td>';
								if($status){
										echo '<td >
										<span id="status'.$codPortifolio.'" value="Ativo">Ativo</span>
										</td>';
									}else{
										
										echo '<td>
										<span id="status'.$codPortifolio.'" value="Inativo">Inativo</span>
										</td>';
									}
								echo '<td>
								<center>
								<button class="botaoEmail Botao" data-toggle="modal" id="modificaProduto" data-target="#modificarProduto" value="'.$codPortifolio.'" type="button"><i class="fa fa-pencil"></i> </button>
								<button class="botaoEmail Botao" data-toggle="modal" id="deletaProduto" data-target="#excluirProduto" value="'.$codPortifolio.'" type="button"><i class="fa fa-trash"></i></button><br>
								<button class="botaoEmail Botao" data-toggle="modal" id="previewImagens" data-target="#mostrarImagens" value="'.$codPortifolio.'" type="button"><i class="fa fa-image"></i></button>
								';
								if($status){
										echo '
										<span id="onoff'.$codPortifolio.'"><button value="'.$codPortifolio.'" class="botaoEmail btnStatus" data-id="'.$codPortifolio.'" data-status='.$codPortifolio.' id="statusPortifolio"> <i class="fa fa-toggle-on")"></i> </button></span>';
									}else{
										
										echo '
										<span id="onoff'.$codPortifolio.'"><button value="'.$codPortifolio.'" class="botaoEmail btnStatus" data-id="'.$codPortifolio.'" data-status='.$codPortifolio.' id="statusPortifolio"> <i class="fa fa-toggle-off")"></i> </button></span>';
									}
									echo '	</center>
									</tr>';
								unset($estatus);
							}
							?>
						</tbody>
					</table>
				</div>

			</main>
				<div  class="modal fade" id="cadastrarPortifolio"  tabindex="-1" role="dialog" aria-labelledby="modalCadastrarProdutoTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
								<h5 class="modal-title">Cadastrar Portifolio:</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" enctype="multipart/form-data"  id="formPortifolio" >									
									<div class="form-group">
										<label for="nomePortifolio">Nome</label>
										<input type="text" name="nomePortifolio" id="nomePortifolio" required class="inpForm" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="descricaoPortifolio">Descrição</label>
										<textarea type="text" rows="16" name="descricaoPortifolio" id="descricaoPortifolio" required class="inpForm" autocomplete="off"></textarea>
									</div>
									<input id="portifolioFoto" name="portifolioFoto" type="file">
								</div>
								<div class="modal-footer">
									<input type="submit" class="btn btn-success" id="cadastrandoSlider" name="cadastrandoSlider" value="Cadastrar"/>
									<button type="button" class="btn btn-secondary" id="returnPortifolio" data-dismiss="modal"> Cancelar </button>
									<input type="hidden" id="addremove">
								</form>
							</div>
						</div>
					</div>
				</div>
			<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/portifolio.js"></script>
<script src="js/popper.min.js.js"></script>

</body>
</html>