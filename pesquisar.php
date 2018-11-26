<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-hospede.php");

	$busca = $_GET['pesquisaHospede'];

	$encontrados = pesquisaHospede($conexao, $busca);
?>
<h2>Resultados da Pesquisa</h2>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
	   	<th scope="col">Nome</th>
	    <th scope="col">CPF</th>
	    <th scope="col">Celular com DDD</th>
	    <th scope="col">E-mail</th>
	    <th scope="col">UF</th>
	    <th scope="col centered">Mais Ações</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		foreach ($encontrados as $encontrado) : ?>
  			<tr>
				<td><?= $encontrado['nome'] ?></td>
				<td><?= $encontrado['cpf'] ?></td>
				<td><?= $encontrado['celular'] ?></td>
				<td><?= $encontrado['email'] ?></td>
				<td><?= $encontrado['estado'] ?></td>
				<td class="mais-acoes">
					<a href="" class="mais-acoes-link">Ver Mais </a>
					<a href="" class="mais-acoes-link">Editar </a>
					<a href="remover.php?id=<?=$encontrado['id']?>&recurso=hospedes" class="mais-acoes-link text-danger disabled">Deletar </a>
				 </td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?php 
	include ("partials/_rodape.php"); 
?>		