<?php 
	include("partials/_header.php"); 
	include("banco/conecta.php");
	include("banco/banco-categoria.php");
	include("logica-usuario.php");

	verificaUsuario(); //verifica se o usuário está logado

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