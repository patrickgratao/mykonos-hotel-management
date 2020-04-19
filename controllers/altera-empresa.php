<?php
	require_once("logica-usuario.php"); //a sessão tem que ser a primeira a inicializar, antes de qualquer html 
	require_once("../models/banco-empresa.php");
	verificaUsuario(); //verifica se o usuário está logado
	require_once("../partials/_header.php");

	//Instanciação de objetos
	$empresa = new Empresa();

  //Atribuições
  
  $empresa->id = $_POST["id"];
	$empresa->cnpj = $_POST["cnpj"];
	$empresa->nomeFantasia = $_POST["nomeFantasia"];
	$empresa->razaoSocial = $_POST["razaoSocial"];
	$empresa->endereco = $_POST["endereco"];
	$empresa->telefone = $_POST["telefone"];
	$empresa->email = $_POST["email"];
	$empresa->site = $_POST["site"];
	

	if (alteraEmpresa($conexao, $empresa)) { 

		$_SESSION["success"] = "Empresa alterada com sucesso!";
		echo "<script>location.href='../views/dados-empresa.php?id=$empresa->id';</script>";
		die();
	}

	else {
		$msg = mysqli_error($conexao);
		$_SESSION["danger"] = "A empresa não pode ser alterada, tente novamente!";
		echo "<script>location.href='../views/dados-empresa.php?id=$empresa->id';</script>"; //<script>location.href='listar-hospedes.php?cadastrado=false';</script>
		die();
	}
