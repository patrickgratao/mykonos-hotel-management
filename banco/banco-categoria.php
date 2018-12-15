<?php 
require_once("conecta.php");

function cadastraCategoria ($conexao, Categoria $categoria) {
	$categoria->nome = mysqli_real_escape_string($conexao, $categoria->nome);
	$query = "insert into categorias (nome) values ('{$categoria->nome}')";
	$resultadoConexao = mysqli_query($conexao, $query);
	return $resultadoConexao;

}

function alteraCategoria ($conexao, Categoria $categoria) {
	$categoria->nome = mysqli_real_escape_string($conexao, $categoria->nome);
	$query = "UPDATE categorias SET nome = '{$categoria->nome}' WHERE id={$categoria->id} ";
	return mysqli_query($conexao, $query);
}

function buscaCategoria ($conexao, Categoria $categoria) {
	$categoria->nome = mysqli_real_escape_string($conexao, $categoria->nome);
	$categorias = array();
	$query = "SELECT * FROM categorias WHERE id = {$categoria->id}";
	
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