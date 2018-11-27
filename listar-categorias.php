<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-categoria.php");

	$categorias = listaCategorias($conexao);
?>
<h2>Todas as Categorias</h2><br>

<!-- mensagens de sucesso e erro REMOÇÃO E CADASTRO -->
	<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
		<p class="alert alert-success">Categoria removida com sucesso.</p>
	<?php } ?>

	<?php if(array_key_exists("cadastrado", $_GET) && $_GET['cadastrado']=='true')  { ?>
			<p class='alert alert-success'>A categoria foi cadastrada com sucesso!</p>
	<?php } 

		else if (array_key_exists("cadastrado", $_GET) && $_GET['cadastrado']=='false')  { ?>
			<p class='alert alert-danger'>A categoria não foi cadastrada! Tente novamente.</p>
		<?php } ?>
<!-- fim das mensagens -->

<table class="table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center">Id</th>
      <th scope="col" class="text-center">Nome da Categoria</th>
      <th scope="col right" class="text-center">Mais Ações</th>
    </tr>
  </thead>
  <tbody>
	<?php  
		foreach ($categorias as $categoria) : ?>
			<tr>
				<td><?= $categoria['id'] ?></td>
				<td><?= $categoria['nome'] ?></td>
				<td class="mais-acoes text-center">
						<a href="" class="mais-acoes-link">Editar </a>
						<a href="remover.php?id=<?=$categoria['id']?>&recurso=categorias" class="mais-acoes-link text-danger">Deletar </a>
				</td>
			</tr>
	<?php endforeach ?>
   </tbody>
</table>
<br>
	<a class="maisopcoes btn btn-primary btn-md" href="cadastrar-categoria.php">Cadastrar Categoria</a>

<?php include("partials/_rodape.php"); ?>