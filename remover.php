<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");

	$tabela = $_GET['recurso'];
	$id = $_GET['id'];

	removeDado($conexao, $tabela, $id);
?>
	<p class="text-sucess">Removido com Sucesso!</p>

	<?php include ("partials/_rodape.php"); ?>