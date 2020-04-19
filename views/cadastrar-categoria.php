<?php 
require_once("../controllers/logica-usuario.php");
	verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); 
	require_once("../partials/_header.php");

	$categoria = array("nome" => ""); //inicializa o campo nome com valor vazio
	
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
										<h2>Cadastrar nova Categoria</h2>
										<p>Fique atento as informações cadastradas.</p>
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

	<form method="POST" action="../controllers/adiciona-categoria.php">
		<?php require_once('../partials/_form_categoria.php'); ?>
		<button class="btn btn-primary notika-btn-primary" type="submit">Cadastrar</button>

	</div>
</div>
</div>
</form>


<?php require_once("../partials/_footer.php") ?>
