<?php 
	include("logica-usuario.php");
	include("banco/conecta.php");
	include("banco/banco-categoria.php");
	verificaUsuario(); //verifica se o usuario esta logado
	
	include("partials/_header.php");

	$categorias = listaCategorias($conexao);
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
										<h2>Cadastrar novo Hóspede</h2>
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

<?php require("partials/_form_cadastro_hospede.php") ?>


<?php include("partials/_footer.php") ?>
