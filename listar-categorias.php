<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-categoria.php");

	$categorias = listaCategorias($conexao);
?>
<h2>Todas as Categorias</h2>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome da Categoria</th>
      <th scope="col right">Mais Ações</th>
    </tr>
  </thead>
  <tbody>
	<?php 
		foreach ($categorias as $categoria) : ?>
			<tr>
				<td><?= $categoria['id'] ?></td>
				<td><?= $categoria['nome'] ?></td>
				<td class="mais-acoes right">
						<a href="" class="mais-acoes-link">Ver Mais </a>
						<a href="" class="mais-acoes-link">Editar </a>
						<a href="remover.php?id=<?=$categoria['id']?>&recurso=categorias" class="mais-acoes-link text-danger">Deletar </a>
				</td>
			</tr>
	<?php endforeach ?>
   </tbody>
</table>

<?php include("partials/_rodape.php"); ?>