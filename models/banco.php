<?php

require_once("conecta.php");
require_once("../class/Categoria.php");
require_once("../class/Hospede.php");

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
	$hospedesEncontrados = array();
	$query = "select p.*, c.nome as categoria_nome from hospedes as p join categorias as c on p.categoria_id = c.id WHERE p.nome LIKE '%{$busca}%' OR p.cpf LIKE '%{$busca}%' ORDER BY p.nome";
	$resultado = mysqli_query($conexao, $query);

	while ($encontrado_array = mysqli_fetch_assoc($resultado)) {
		//Instanciação de Objetos
		$hospede = new Hospede();
		$categoria = new Categoria();
		
		//Atribuições aos atributos
		$categoria->nome = $encontrado_array['categoria_nome'];
		
		$hospede->id = $encontrado_array['id'];
		$hospede->nome = $encontrado_array['nome'];
		$hospede->cpf = $encontrado_array['cpf'];
		$hospede->celular = $encontrado_array['celular'];
		$hospede->categoria = $categoria;
		$hospede->email = $encontrado_array['email'];
		
		//Inserindo as informações do objeto dentro do array que será retornado
		array_push($hospedesEncontrados, $hospede);
	}
		
	return $hospedesEncontrados;
}