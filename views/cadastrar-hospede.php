<?php 
require_once("../controllers/logica-usuario.php");
require_once("../models/banco-categoria.php");
	verificaUsuario(); //verifica se o usuario esta logado
	require_once("../class/Hospede.php");	
	require_once("../partials/_header.php");

	$categorias = listaCategorias($conexao);

	$hospede = new Hospede();

	$hospede->nome = "";
	$hospede->cpf = "";
	$hospede->dataNascimento = "";
	$hospede->sexo = "";
	$hospede->telefone = "";
	$hospede->celular = "";
	$hospede->email = "";
	$hospede->estadoCivil = "";
	$hospede->cep = "";
	$hospede->rua = "";
	$hospede->bairro = "";
	$hospede->cidade = "";
	$hospede->estado = "";
	$hospede->dataCheckin = "";
	$hospede->dataCheckout = "";
	$hospede->qtdDiarias = "";
	$hospede->qtdAcompanhantes = "";
	$hospede->precoDiaria = "";
	$hospede->valorPago = ""; 
	$hospede->precoTotal = "";
	$hospede->totalPagar = "1";
	$hospede->infoExtras = "";
	$hospede->categoria = "";

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

	<form class="needs-validation" method="POST" action="../controllers/adiciona-hospede.php">
		<?php require_once('../partials/_form_hospede.php'); ?>
		<button class="btn btn-primary notika-btn-primary btn-lg" type="submit">Cadastrar Hóspede</button>
	</div>
</form>


<?php require_once("../partials/_footer.php") ?>
