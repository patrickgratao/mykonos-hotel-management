<?php 
	include("partials/_header.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("logica-usuario.php");

	verificaUsuario(); //verifica se o usuário está logado

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