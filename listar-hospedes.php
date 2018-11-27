<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-hospede.php");

	$hospedes = listaHospedes($conexao);

?>
<h2>Todos os hóspedes</h2><br>

<!-- mensagens de sucesso e erro REMOÇÃO E CADASTRO -->
	<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
		<p class="alert alert-success">Hóspede removido com sucesso.</p>
	<?php } ?>

	<?php if(array_key_exists("cadastrado", $_GET) && $_GET['cadastrado']=='true')  { ?>
			<p class='alert alert-success'>O Hóspede foi cadastrado com sucesso!</p>
	<?php } 

		else if (array_key_exists("cadastrado", $_GET) && $_GET['cadastrado']=='false')  { ?>
			<p class='alert alert-danger'>O hóspede não foi cadastrado! Tente novamente.</p>
		<?php } ?>
<!-- fim das mensagens -->

<table class="table table-striped table-bordered">
	<thead class="thead-dark">
	    <tr>
	      <th scope="col" class="text-center">Nome</th>
	      <th scope="col" class="text-center">CPF</th>
	      <th scope="col" class="text-center">Celular com DDD</th>
	      <th scope="col" class="text-center">E-mail</th>
	      <th scope="col" class="text-center">UF</th>
	      <th scope="col centered" class="text-center">Mais Ações</th>
	    </tr>
  	</thead>
  	<tbody>
		<?php 
			foreach ($hospedes as $hospede) : ?>
				<tr>
					<td><?= $hospede['nome'] ?></td>
					<td><?= $hospede['cpf'] ?></td>
					<td><?= $hospede['celular'] ?></td>
					<td><?= $hospede['email'] ?></td>
					<td><?= $hospede['estado'] ?></td>
					<td class="mais-acoes text-center" >
						<a href="" class="mais-acoes-link">Ver Mais </a>
						<a href="" class="mais-acoes-link">Editar </a>
						<a href="remover.php?id=<?=$hospede['id']?>&recurso=hospedes" class="mais-acoes-link text-danger">Deletar </a>
					 </td>
				</tr>		
		<?php endforeach ?>
	</tbody>
</table><br>
	<a class="maisopcoes btn btn-primary btn-md" href="cadastrar-hospede.php">Cadastrar Hóspede</a>
<?php include("partials/_rodape.php"); ?>



































