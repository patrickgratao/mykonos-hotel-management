<?php 
	include("logica-usuario.php");
	include("banco/conecta.php");
	include("banco/banco-categoria.php");
	
	verificaUsuario(); //verifica se o usuário está logado
	include("partials/_header.php"); 


	$nome = $_POST["nomeCategoria"];

	if (cadastraCategoria($conexao, $nome)) { 
		$_SESSION["success"] = "Categoria cadastrada com sucesso!";

		echo "<script>location.href='listar-categorias.php';</script>";
		die();
	}

	else {
		$_SESSION["danger"] = "A categoria não foi cadastrada. Tente novamente!";
		echo "<script>location.href='listar-categorias.php';</script>";
		die();
	}