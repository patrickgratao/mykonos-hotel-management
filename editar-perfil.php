<?php 
	require_once("logica-usuario.php");
	require_once("banco/banco-usuario.php");

  	verificaUsuario(); //verifica se o usuário está logado
  	require_once("partials/_header.php");

  	$id = $_POST['id'];
	
	$usuario = buscaUsuario($conexao, $id); 

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
										<h2>Editar Perfil</h2>
										<p>Fique atento durante a edição das informações.</p>
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

	<form method="POST" action="altera-perfil.php">
		<?php require_once('partials/_form_perfil.php'); ?>
		</div>
	</div><br>
		<button class="btn btn-primary notika-btn-primary" type="submit">Alterar</button>

</form>


<?php require_once("partials/_footer.php"); ?>