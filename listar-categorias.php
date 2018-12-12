<?php 
	include("logica-usuario.php");
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-categoria.php");
	verificaUsuario(); //verifica se o usuário está logado
	include("partials/_header.php"); 

	$categorias = listaCategorias($conexao);

	include("partials/mensagens.php");
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
										<h2>Todas as Categorias</h2>
										<p>Estas categorias são utilizadas para selecionar os hóspedes e organizar informações.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
								<div class="breadcomb-report">
									<a href="cadastrar-categoria.php" data-toggle="tooltip" data-placement="left" title="Cadastrar nova categoria" class="btn"><i class="notika-icon notika-plus-symbol"></i></a>
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
							      <th>Nome da Categoria</th>
							      <th class="text-center">Mais Ações</th>
							    </tr>
							  </thead>
							  <tbody>
								<?php  
									foreach ($categorias as $categoria) : ?>
										<tr>
											<td><?= $categoria['nome'] ?></td>
											<td class="mais-acoes text-center">
													<div class="btn-group notika-group-btn">
					                                <form class="mais-opcoes" action="editar-categoria.php" method="post">
					                                	<input type="hidden" name="id" value="<?=$categoria['id'] ?>">
					                                	<button class="btn btn-primary notika-gp-primary">Editar</button>
					                                </form>
					                                
					                                <form class="mais-opcoes" action="remover.php" method="post">
					                                	<input type="hidden" name="id" value="<?= $categoria['id'] ?>">
					                                	<input type="hidden" name="recurso" value="categorias">

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
				<a class="maisopcoes btn btn-primary btn-md" href="cadastrar-categoria.php">Cadastrar Categoria</a>
				</div>
			</div>
		</div>
	</div>
<?php include("partials/_footer.php"); ?>