<?php 
	require_once("../controllers/logica-usuario.php");
	require_once("../models/banco-usuario.php");
	verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); //verifica nível de permissão do usuário logado
	require_once("../class/Usuario.php");	
	require_once("../partials/_header.php");
		
	//Instanciação de Objeto
	$usuario = new Usuario();

	//Atribuição inicial
	$usuario->id = "";
	$usuario->nome = "";
	$usuario->email = "";
	$usuario->senha = "";
	$usuario->permissao = "";

	
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
										<h2>Cadastrar novo Usuário do Sistema</h2>
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

	<form method="POST" action="../controllers/adiciona-usuario.php">
		<?php require_once('../partials/_form_usuario.php'); ?>
		</div>
		</div>
		<br>	
		<button class="btn btn-primary notika-btn-primary btn-lg" type="submit">Cadastrar Usuário</button>

	</div>
</form>


<?php require_once("../partials/_footer.php") ?>
