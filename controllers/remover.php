<?php 
require_once("logica-usuario.php");
require_once("../models/banco.php");

	verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); //verifica nível de permissão do usuário logado
	
	$tabela = $_POST['recurso'];
	$id = $_POST['id'];
	
	removeDado($conexao, $tabela, $id);


	if ($tabela == "hospedes") {
		$_SESSION["success"] = "Hóspede removido com sucesso!";
		echo "<script>location.href='../views/listar-hospedes.php';</script>";
		die();

	}

	if ($tabela == "usuarios") {
		$_SESSION["success"] = "Usuário removido com sucesso!";
		echo "<script>location.href='../views/listar-usuarios.php';</script>";
		die();

	}

	else {
		$_SESSION["success"] = "Categoria removida com sucesso!";
		echo "<script>location.href='../views/listar-categorias.php';</script>";
		die();
	}

	require_once("../partials/_footer.php");
	?>