<?php 
require_once("logica-usuario.php");
require_once("banco/banco-categoria.php");
	verificaUsuario(); //verifica se o usuario esta logado
	
	require_once("partials/_header.php");

	$categorias = listaCategorias($conexao);
	$hospede = array("nome" => "", "cpf" => "", "data_nascimento" => "", "sexo" => " ", "telefone" => "", "celular" => "", "email" => "", "estado_civil" => "", "categoria_id" => "", "cep" => "", "rua" => "", "bairro" => "", "cidade" => "", "estado" => "", "data_checkin" => "", "data_checkout" => "", "qtd_diarias" => "", "qtd_pagantes" => "", "preco_diaria" => "", "valor_pago" => "", "preco_total" => "", "total_pagar" => "1", "info_extras" => " ");

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

	<form class="needs-validation" method="POST" action="adiciona-hospede.php">
		<?php require_once('partials/_form_hospede.php'); ?>
		<button class="btn btn-primary notika-btn-primary btn-lg" type="submit">Cadastrar Hóspede</button>
	</div>
</form>

<?php require_once("partials/_footer.php") ?>
