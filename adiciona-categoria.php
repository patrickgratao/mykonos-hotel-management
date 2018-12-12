<?php 
	include("logica-usuario.php"); //a sessão tem que ser a primeira a inicializar, antes de qualquer html
	include("partials/_header.php"); 
	include("banco/conecta.php");
	include("banco/banco-categoria.php");
	

	verificaUsuario(); //verifica se o usuário está logado

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

?>