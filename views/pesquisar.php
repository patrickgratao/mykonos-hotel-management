<?php 

include("../controllers/logica-usuario.php");
include("../models/conecta.php");
include("../models/banco.php");
include("../models/banco-hospede.php");
	verificaUsuario(); //verifica se o usuário está logado
	include("../partials/_header.php"); 

	$busca = $_GET['pesquisaHospede'];

	$encontrados = pesquisaHospede($conexao, $busca);
	?>
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Resultado da Pesquisa</h2>
										<p>Estes são os hóspedes encontrados com base no que você pesquisou. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
								<div class="breadcomb-report">
									<a href="cadastrar-hospede.php" data-toggle="tooltip" data-placement="left" title="Cadastrar novo Hóspede" class="btn"><i class="notika-icon notika-plus-symbol"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->

	<?php if (sizeof($encontrados) > 0) { ?>
		<div class="data-table-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="data-table-list">
							<div class="table-responsive">
								<table id="data-table-basic" class="table table-striped">
									<thead>
										<tr>
											<th scope="col" class="text-center">Nome</th>
											<th scope="col" class="text-center">CPF</th>
											<th scope="col" class="text-center">Celular com DDD</th>
											<th scope="col" class="text-center">Categoria</th>
											<th scope="col" class="text-center">E-mail</th>
											<th scope="col" class="text-center">Mais Ações</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach ($encontrados as $encontrado) : ?>
											<tr>
												<td><?= $encontrado->nome ?></td>
												<td><?= $encontrado->cpf ?></td>
												<td><?= $encontrado->celular ?></td>
												<td class="text-center"><?= $encontrado->categoria->nome ?></td>
												<td><?= $encontrado->email ?></td>
												<td class="mais-acoes text-center">
													<div class="btn-group notika-group-btn material-design-btn">
														<form class="mais-opcoes" action="ver-mais.php">
															<input type="hidden" name="id" value="<?= $encontrado->id ?>">
															<button class="btn btn-primary btn-sm notika-gp-primary">Ver Mais</button>
														</form>

														<form action="editar-hospede.php" class="mais-opcoes" method="post">
															<input type="hidden" name="id" value="<?=$encontrado->id?>">
															<button class="btn btn-default btn-sm">Editar</button>
														</form>
														<form class="mais-opcoes" action="../controllers/remover.php" method="post">
															<input type="hidden" name="id" value="<?=$encontrado->id?>" >
															<input type="hidden" name="recurso" value="hospedes">
															<button class="<?= $_SESSION['nivel_usuario'] == 'admin' ? '' : 'acesso-restrito';  ?> btn btn-sm btn-danger notika-gp-danger">Excluir</button>
														</form>

													</div>


												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><br><br>
				<a class="btn btn-success notika-btn-primary btn" href="listar-hospedes.php">Ver todos os Hóspedes</a>
			</div>
		</div>

	<?php } 
	else { ?>
		<div class="alert-list">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Nenhum resultado foi encontrado!
			</div>
		</div>
		<h3 class="text-danger"></h3>
		<br>
		<a class="btn btn-primary notika-btn-primary btn-lg" href="cadastrar-hospede.php">Cadastrar Hóspede</a>
	<?php } 	

	include ("../partials/_footer.php"); 
	?>		