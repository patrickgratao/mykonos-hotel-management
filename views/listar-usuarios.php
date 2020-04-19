<?php 
	require_once("../controllers/logica-usuario.php");
	require_once("../models/banco.php");
	require_once("../models/banco-usuario.php");
	verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); //verifica nível de permissão do usuário logado
	require_once("../partials/_header.php"); 

	$usuarios = listaUsuarios($conexao);

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
										<h2>Todas os Usuários</h2>
										<p>Estes são os usuários responsáveis pelo sistema.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
								<div class="breadcomb-report">
									<a href="cadastrar-usuario.php" data-toggle="tooltip" data-placement="left" title="Cadastrar novo usuário" class="btn"><i class="notika-icon notika-plus-symbol"></i></a>
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

<div class="data-table-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="data-table-list">
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>Nome</th>
									<th>E-mail</th>
									<th>Nível de Acesso</th>
									<th class="text-center">Mais Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php  
								foreach ($usuarios as $usuario) : ?>
									<tr>
										<td><?= $usuario->nome ?></td>
										<td><?= $usuario->email ?></td>
										<td><?= $usuario->permissao == 'admin' ? 'Administrador' : "Usuário Padrão"; ?></td>
										<td class="mais-acoes text-center">
											<div class="btn-group notika-group-btn">
												<form class="mais-opcoes" action="editar-usuario.php" method="post">
													<input type="hidden" name="id" value="<?=$usuario->id ?>">
													<button class="btn btn-primary notika-gp-primary">Editar</button>
												</form>
												
												<form class="mais-opcoes" action="../controllers/remover.php" method="post">
													<input type="hidden" name="id" value="<?= $usuario->id ?>">
													<input type="hidden" name="recurso" value="usuarios">

													<button class="btn btn-danger notika-gp-danger">Excluir</button>
												</form>
												
											</div>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div><br>
				<a class="maisopcoes btn btn-primary btn-md" href="cadastrar-usuario.php">Cadastrar Usuário</a>
			</div>
		</div>
	</div>
</div>
<?php require_once("../partials/_footer.php"); ?>