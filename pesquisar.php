<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-hospede.php");

	$busca = $_GET['pesquisaHospede'];

	$encontrados = pesquisaHospede($conexao, $busca);
?>
<h2>Resultados da Pesquisa</h2><br>

<?php if (sizeof($encontrados) > 0) { ?>
	<table class="table table-striped table-bordered">
		<thead class="thead-dark">
	    <tr>
		   	<th scope="col" class="text-center">Nome</th>
		    <th scope="col" class="text-center">CPF</th>
		    <th scope="col" class="text-center">Celular com DDD</th>
		    <th scope="col" class="text-center">E-mail</th>
		    <th scope="col" class="text-center">UF</th>
		    <th scope="col" class="text-center">Mais Ações</th>
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
					<td class="mais-acoes text-center">
						<a href="" class="mais-acoes-link">Ver Mais </a>
						<a href="" class="mais-acoes-link">Editar </a>
						<a href="remover.php?id=<?=$encontrado['id']?>&recurso=hospedes" class="mais-acoes-link text-danger disabled">Deletar </a>
					 </td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table><br>
	<a class="mais-opcoes btn btn-success btn-md" href="listar-hospedes.php">Ver todos os Hóspedes</a>
 <?php } 
	else { ?>
		<h3 class="text-danger">Nenhum resultado foi encontrado!</h3>
		<br>
		<a class="mais-opcoes btn btn-primary btn-md" href="cadastrar-hospede.php">Cadastrar Hóspede</a>
	<?php } ?>	
<?php 
	include ("partials/_rodape.php"); 
?>		