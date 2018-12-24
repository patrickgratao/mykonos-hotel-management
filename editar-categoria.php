<?php 
require_once("logica-usuario.php");
require_once ("banco/banco-categoria.php");
	verificaUsuario(); //verifica se o usuário está logado
	require_once ("partials/_header.php");
	require_once("class/Categoria.php");

	$categoria = new Categoria();
	
	$categoria->id = $_POST['id'];
	
	$categoria = buscaCategoria($conexao, $categoria);
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

	<form method="POST" action="altera-categoria.php">
		<?php require_once('partials/_form_categoria.php'); ?>
		<button class="btn btn-primary notika-btn-primary" type="submit">Alterar Categoria</button>

	</div>
</div>
</div>
</form>


<?php require_once("partials/_footer.php") ?>
