<?php 
	require_once("../controllers/logica-usuario.php");
	require_once ("../models/banco-categoria.php");
	verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); 
	
	require_once ("../partials/_header.php");

	$id = $_POST['id'];
	
	$categoria = buscaCategoria($conexao, $id);
?>
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Editar Categoria</h2>
										<p>Fique atento durante a edição de informações.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->

	<form method="POST" action="../controllers/altera-categoria.php">
		<?php require_once('../partials/_form_categoria.php'); ?>
		<button class="btn btn-primary notika-btn-primary" type="submit">Alterar Categoria</button>

	</div>
</div>
</div>
</form>


<?php require_once("../partials/_footer.php") ?>
