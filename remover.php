<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");

	$tabela = $_GET['recurso'];
	$id = $_GET['id'];

	removeDado($conexao, $tabela, $id);


	if ($tabela == "hospedes") {
		echo "<script>location.href='listar-hospedes.php?removido=true';</script>";
	die();

	}

	else {
		echo "<script>location.href='listar-categorias.php?removido=true';</script>";
	die();
	}

	include("partials/_rodape.php");
?>