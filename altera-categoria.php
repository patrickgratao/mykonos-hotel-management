<?php 
  include("partials/_header.php"); 
  include("banco/conecta.php");
  include("banco/banco-categoria.php");

 	$id = $_POST['id'];
  	$nome = $_POST["nomeCategoria"]; 	
	

  if (alteraCategoria($conexao, $nome, $id)) { 
		
		echo "<script>location.href='listar-categorias.php?alterado=true';</script>";
		die();
	}

	else {
		$msg = mysqli_error($conexao);
		echo "<script>location.href='listar-categorias.php?alterado=false';</script>"; //<script>location.href='listar-hospedes.php?cadastrado=false';</script>
		die();
	}
