<?php 
	require_once("logica-usuario.php"); //a sessão tem que ser a primeira a inicializar, antes de qualquer html 
	require_once("../models/banco-usuario.php");
	verificaUsuario(); //verifica se o usuário está logado
	require_once("../class/Usuario.php"); 
	
	//Instancia de um objeto
	$usuario = new Usuario();

	//Atribuições
	$usuario->id = $_POST['id'];
	$usuario->nome = $_POST['nomeUsuario'];
	$usuario->email = $_POST['emailUsuario'];
	$usuario->senha = $_POST['senhaUsuario'];

	if (alteraPerfil($conexao, $usuario)) {
		$_SESSION["success"] = "O seu perfil foi alterado com sucesso!";
		echo "<script>location.href='../views/meu-perfil.php?id=$usuario->id';</script>"; 
	} 

	else {
		$msg = mysqli_error($conexao);
		$_SESSION["danger"] = "O seu perfil não foi alterado!";
		echo "<script>location.href='../views/meu-perfil.php?id=$usuario->id';</script>"; 
	}


