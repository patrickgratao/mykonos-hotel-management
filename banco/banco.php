<?php

	//Aqui ficam todas as funções relacionadas ao programa
	function bancoConectado ($conexao) {
		if (!$conexao) {
			die("Conexão Falida: ".mysqli_connect_error());
	}
		echo "Sucesso na conexão";

	}

	function removeDado ($conexao, $tabela , $id) {
		$query = "delete from {$tabela} where id = {$id}";
		return mysqli_query($conexao, $query);

	}

	function pesquisaHospede ($conexao, $busca) {
		$encontrados = array();
		$query = "select * from hospedes where nome = {$busca} OR cpf = {$busca}";
		$resultado = mysqli_query($conexao, $query);

		while ($encontrado = mysqli_fetch_assoc($resultado)) {
			array_push($encontrados, $encontrado);
		}
		return $encontrados;
	}