<?php 
	include("logica-usuario.php"); //a sessão tem que ser a primeira a inicializar, antes de qualquer html
	include("partials/_header.php"); 
	include("banco/conecta.php");
	include("banco/banco-categoria.php");
	

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