<?php 
	include("partials/_header.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");

	$tabela = $_POST['recurso'];
	$id = $_POST['id'];

	removeDado($conexao, $tabela, $id);


	if ($tabela == "hospedes") {
		echo "<script>location.href='listar-hospedes.php?removido=true';</script>";
	die();

	}

	else {
		echo "<script>location.href='listar-categorias.php?removido=true';</script>";
	die();
	}

	include("partials/_footer.php");
?>