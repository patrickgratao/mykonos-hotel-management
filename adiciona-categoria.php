<?php 
require_once("logica-usuario.php");
require_once("banco/banco-categoria.php");
require_once("class/Categoria.php");

verificaUsuario(); //verifica se o usuário está logado
require_once("partials/_header.php"); 

	//instanciação de um objeto categoria
	$categoria = new Categoria(); 

	$categoria->nome = $_POST["nomeCategoria"];

	if (cadastraCategoria($conexao, $categoria)) { 
		$_SESSION["success"] = "Categoria cadastrada com sucesso!";
		echo "<script>location.href='listar-categorias.php';</script>";
		die();
	}

	else {
		$_SESSION["danger"] = "A categoria não foi cadastrada. Tente novamente!";
		echo "<script>location.href='listar-categorias.php';</script>";
		die();
	}