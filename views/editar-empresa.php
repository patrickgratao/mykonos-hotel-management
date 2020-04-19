<?php 
	 require_once("../controllers/logica-usuario.php");
   require_once("../models/banco-empresa.php");
 
	 verificaUsuario(); //verifica se o usuário está logado
	 verificaPermissao(); //verifica se o usuário está logado
	 
   require_once("../partials/_header.php"); 
   
   $id = $_POST['id'];
   
   $empresa = buscaEmpresa($conexao, $id);
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
										<h2>Editar Empresa</h2>
										<p>Fique atento à edição de informações.</p>
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

	<form class="needs-validation" method="POST" action="../controllers/altera-empresa.php">
		<input type="hidden" name="id" value="<?=$empresa->id?>" />
		<?php require_once('../partials/_form_empresa.php'); ?>
		<br><br><button class="btn btn-primary notika-btn-primary btn-lg" type="submit">Alterar Dados</button>
	</div> </div><div>


<?php require_once("../partials/_footer.php") ?>
