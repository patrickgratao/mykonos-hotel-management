<?php 
require_once("../controllers/logica-usuario.php");
require_once("../models/banco.php");
require_once("../models/banco-hospede.php");
	verificaUsuario(); //verifica se o usuário está logado
	require_once("../partials/_header.php");
	require_once("../class/Hospede.php"); 

	$hospedes = listaHospedes($conexao);
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
										<h2>Todas os Hóspedes</h2>
										<p>Estes são os hóspedes cadastrados no sistema. </p>
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
										<th scope="col" class="text-center">Último Check-in</th>
										<th scope="col" class="text-center ">Mais Ações</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($hospedes as $hospede) : ?>
										<tr>
											<td><?= $hospede->nome ?></td>
											<td><?= $hospede->cpf ?></td>
											<td><?= $hospede->celular ?></td>
											<td class="text-center"><?= $hospede->categoria->nome ?></td>
											<td><?= $hospede->dataCheckin ?></td>
											<td class="mais-acoes text-center" >
												<div class="btn-group notika-group-btn material-design-btn">
													<form class="mais-opcoes" method="POST" action="ficha-hospede.php">
											            <input type="hidden" name="id" value="<?=$hospede->id?>">
											            <button class="btn btn-success btn-sm notika-gp-success">F.N.R.H</button>
											        </form>
													<form class="mais-opcoes" action="ver-mais.php" >
														<input type="hidden" name="id" value="<?= $hospede->id ?>">
														<button class="btn btn-primary btn-sm notika-gp-primary">Ver Mais</button>
													</form>

													<form action="editar-hospede.php" class="mais-opcoes" method="post">
														<input type="hidden" name="id" value="<?=$hospede->id ?>">
														<button class="btn btn-default btn-sm">Editar</button>
													</form>
													<form class="mais-opcoes" action="../controllers/remover.php" method="post">
														<input type="hidden" name="id" value="<?=$hospede->id ?>" >
														<input type="hidden" name="recurso" value="hospedes">
														<button class=" <?= $_SESSION['nivel_usuario'] == 'admin' ? '' : 'acesso-restrito';  ?> btn btn-sm btn-danger notika-gp-danger">Excluir</button>
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
			</div>
		</div>
	</div>
	<br>
	<a class="btn btn-primary notika-btn-primary btn-lg" href="cadastrar-hospede.php">Cadastrar Hóspede</a>
	<?php require_once("../partials/_footer.php"); ?>