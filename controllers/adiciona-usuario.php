<?php 
require_once("logica-usuario.php");
require_once("../models/banco-usuario.php");
require_once("../class/Usuario.php");

verificaUsuario(); //verifica se o usuário está logado
verificaPermissao(); //verifica nível de permissão do usuário logado

require_once("../partials/_header.php"); 

	$usuario = new Usuario(); //instanciação de um objeto usuário

	$usuario->nome = $_POST['nomeUsuario'];
	$usuario->email = $_POST['emailUsuario'];
	$usuario->senha = $_POST['senhaUsuario'];
	$usuario->permissao = $_POST['permissaoUsuario'];

	if (cadastraUsuario($conexao, $usuario)) { 
		$_SESSION["success"] = "O usuário foi cadastrado com sucesso!";
		echo "<script>location.href='../views/listar-usuarios.php';</script>";
		die();
	}

	else {
		$msg = mysqli_error($conexao);
		echo $msg;
		$_SESSION["danger"] = "O usuário não foi cadastrado. Tente novamente!";
		//echo "<script>location.href='../views/listar-usuarios.php';</script>";
		die();
	}