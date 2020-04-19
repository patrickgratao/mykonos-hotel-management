<?php 
	require_once("../controllers/logica-usuario.php");
	require_once("../models/banco-usuario.php");
	verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); //verifica nível de permissão do usuário logado
	require_once("../class/Usuario.php");	
	require_once("../partials/_header.php");

	$id=$_POST['id'];

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
										<h2>Editar Usuário</h2>
										<p>Fique atento à edição de informações. Estes usuários controlam o sistema</p>
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

<form method="POST" action="../controllers/altera-usuario.php">
		<?php require_once('../partials/_form_usuario.php'); ?>
		</div>
		</div>
		<br>	
		<button class="btn btn-danger notika-btn-danger btn-lg" type="submit">Alterar Usuário</button>

	</div>
</form>


<?php require_once("../partials/_footer.php") ?>
