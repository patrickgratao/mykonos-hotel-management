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
		$query = "select p.*, c.nome as categoria_nome from hospedes as p join categorias as c on p.categoria_id = c.id WHERE p.nome LIKE '%{$busca}%' OR p.cpf LIKE '%{$busca}%' ORDER BY p.nome";
		$resultado = mysqli_query($conexao, $query);

		while ($encontrado = mysqli_fetch_assoc($resultado)) {
			array_push($encontrados, $encontrado);
		}
		return $encontrados;
	}