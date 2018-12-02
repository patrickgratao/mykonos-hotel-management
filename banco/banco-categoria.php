<?php 
	function cadastraCategoria ($conexao, $nome) {
		$query = "insert into categorias (nome) values ('{$nome}')";
		$resultadoConexao = mysqli_query($conexao, $query);
		return $resultadoConexao;

	}

	function alteraCategoria ($conexao, $nome, $id) {
  		$query = "UPDATE categorias SET nome = '{$nome}' WHERE id={$id} ";
  		return mysqli_query($conexao, $query);
  }

  function buscaCategoria ($conexao, $id) {
  	$categorias = array();
  	$query = "SELECT * FROM categorias WHERE id = {$id}";
  	$resultado = mysqli_query($conexao, $query);
  	array_push($categorias, $resultado);
  	$categorias = mysqli_fetch_assoc($resultado);
  	
  	return $categorias;

  }

	function listaCategorias ($conexao) {
		$categorias = array();
		$query = "select * from categorias order by nome";
		$resultado = mysqli_query($conexao, $query);

		while ($categoria = mysqli_fetch_assoc($resultado)) {
			array_push($categorias, $categoria); 
		}

		return $categorias;

	}