<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco-categoria.php");

	$nome = $_POST["nomeCategoria"];

	if (cadastraCategoria($conexao, $nome)) { ?>
		<p class='alert alert-success'>A categoria <strong><?= $nome ?></strong> foi cadastrada com sucesso!</p>
	<?php }

	else {
		$msg = mysqli_error($conexao); ?>
		<p class='alert alert-danger'>A categoria não foi cadastrada! Erro: <?= $msg ?></p>
	<?php }
	
	include("partials/_rodape.php"); 

	?>