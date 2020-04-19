<?php 
	require_once("logica-usuario.php"); //a sessão tem que ser a primeira a inicializar, antes de qualquer html 
	require_once("../models/banco-categoria.php");
	require_once("../class/Categoria.php");
	verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); 
	
	require_once("../partials/_header.php");

	//Instanciação do Objeto
	$categoria = new Categoria();

	//Atribuições
	$categoria->id = $_POST['id'];
	$categoria->nome = $_POST["nomeCategoria"]; 	
	

	if (alteraCategoria($conexao, $categoria)) { 
		$_SESSION["success"] = "Categoria alterada com sucesso!";
		echo "<script>location.href='../views/listar-categorias.php';</script>";
		die();
	}

	else {
		$msg = mysqli_error($conexao);
		$_SESSION["danger"] = "A categoria não foi alterada!";	
		echo "<script>location.href='../views/listar-categorias.php';</script>"; //<script>location.href='listar-hospedes.php?cadastrado=false';</script>
		die();
	}
