<?php 
require_once("conecta.php");
require_once("../class/Categoria.php");

function cadastraCategoria ($conexao, Categoria $categoria) {
	//evita sqlinjection e aceita a aspa simples Ex. Joana D'arc
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

function buscaCategoria ($conexao, $id) {
	$query = "SELECT * FROM categorias WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$categoria_buscada = mysqli_fetch_assoc($resultado); //é um array
	
	//Instanciação do Objeto
	$categoria = new Categoria();

	//Atribuição
	$categoria->id = $categoria_buscada['id'];
	$categoria->nome = $categoria_buscada['nome'];


	return $categoria;

}

function listaCategorias ($conexao) {
	$categorias = array();
	$query = "select * from categorias order by nome";
	$resultado = mysqli_query($conexao, $query);

	while ($categoria_array = mysqli_fetch_assoc($resultado)) {
		//Instanciação do objeto
		$categoria = new Categoria(); 

		//Atribuição dos atributos
		$categoria->id = $categoria_array['id'];
		$categoria->nome = $categoria_array['nome'];

		array_push($categorias, $categoria);
	}

	return $categorias;

}