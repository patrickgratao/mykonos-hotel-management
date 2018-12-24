<?php 
require_once("conecta.php");

function buscaUsuario ($conexao, $email, $senha) {
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;

}

function cadastraUsuario ($conexao, Usuario $usuario) {
	//Evita ataque de sql injection -> aceita a aspa simples Ex. Joana D'arc
	$usuario->nome = mysqli_real_escape_string($conexao, $usuario->nome);
	$usuario->email = mysqli_real_escape_string($conexao, $usuario->email);
	$usuario->senha = mysqli_real_escape_string($conexao, $usuario->senha);
	$usuario->permissao = mysqli_real_escape_string($conexao, $usuario->permissao);

	$usuario->senha = md5($usuario->senha);
	$query = "INSERT INTO usuarios (nome, email, senha, permissao) VALUES ('{$usuario->nome}', '{$usuario->email}', {$usuario->senha}, '{$usuario->permissao}')";

	$resultadoConexao = mysqli_query($conexao, $query);
	return $resultadoConexao;

}


function listaUsuarios ($conexao) {
	$usuarios = array();
	$query = "SELECT * FROM usuarios ORDER BY permissao";
	$resultado = mysqli_query($conexao, $query);
	
	while ($usuario = mysqli_fetch_assoc($resultado)) {
		array_push($usuarios, $usuario);
	}
	return $usuarios;

}