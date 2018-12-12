<?php 
function cadastraCategoria ($conexao, $nome) {
	$nome = mysqli_real_escape_string($conexao, $nome);
	$query = "insert into categorias (nome) values ('{$nome}')";
	$resultadoConexao = mysqli_query($conexao, $query);
	return $resultadoConexao;

}

function alteraCategoria ($conexao, $nome, $id) {
	$nome = mysqli_real_escape_string($conexao, $nome);
	$query = "UPDATE categorias SET nome = '{$nome}' WHERE id={$id} ";
	return mysqli_query($conexao, $query);
}

function buscaCategoria ($conexao, $id) {
	$nome = mysqli_real_escape_string($conexao, $nome);
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