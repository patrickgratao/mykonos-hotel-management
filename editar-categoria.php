<?php 
	include ("partials/_header.php");
	include ("banco/conecta.php");
	include ("banco/banco-categoria.php");
	include("logica-usuario.php");

	verificaUsuario(); //verifica se o usuário está logado

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

<?php require("partials/_form_editar_categoria.php") ?>


<?php include("partials/_footer.php") ?>
