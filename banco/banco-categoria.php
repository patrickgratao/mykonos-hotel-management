<?php 
	function cadastraCategoria ($conexao, $nome) {
		$query = "insert into categorias (nome) values ('{$nome}')";
		$resultadoConexao = mysqli_query($conexao, $query);
		return $resultadoConexao;

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