<?php 
include("logica-usuario.php");
	verificaUsuario(); //verifica se o usuário está logado
	include("partials/_header.php");

	$categoria = array("nome" => "");
	
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

	<form method="POST" action="adiciona-categoria.php">
		<?php include('partials/_form_categoria.php'); ?>
		<button class="btn btn-primary notika-btn-primary" type="submit">Cadastrar</button>

	</div>
</div>
</div>
</form>


<?php include("partials/_footer.php") ?>
