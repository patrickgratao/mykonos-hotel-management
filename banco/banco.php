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
	//Função responsável pela pesquisa de hóspedes
	function pesquisaHospede ($conexao, $busca) {
		$encontrados = array();
		$query = "SELECT * FROM hospedes WHERE nome LIKE '%{$busca}%' OR cpf LIKE '%{$busca}%' ORDER BY nome";
		$resultado = mysqli_query($conexao, $query);

		while ($encontrado = mysqli_fetch_assoc($resultado)) {
			array_push($encontrados, $encontrado);
		}
		return $encontrados;
	}