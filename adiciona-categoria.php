<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco-categoria.php");

	$nome = $_POST["nomeCategoria"];

	if (cadastraCategoria($conexao, $nome)) { 
		echo "<script>location.href='listar-categorias.php?cadastrado=true';</script>";
		die();
	}

	else {
		echo "<script>location.href='listar-categorias.php?cadastrado=false';</script>";
		die();
	}

?>