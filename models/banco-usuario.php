<?php 
	require_once("conecta.php");
	require_once("../class/Usuario.php");


function possoLogar ($conexao, $email, $senha) {
	//Impossibilitar erro de sql injection
	$email = mysqli_real_escape_string($conexao, $email);
	$senha = mysqli_real_escape_string($conexao, $senha);

	$senha = md5($senha);
	$query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'";
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

	//Criptografia da senha inserida pelo usuario
	$usuario->senha = md5($usuario->senha);
	$query = "INSERT INTO usuarios (nome, email, senha, permissao) VALUES ('{$usuario->nome}', '{$usuario->email}', '{$usuario->senha}', '{$usuario->permissao}')";

	$resultadoConexao = mysqli_query($conexao, $query);
	return $resultadoConexao;
}


function listaUsuarios ($conexao) {
	$usuarios = array();
	$query = "SELECT * FROM usuarios ORDER BY permissao";
	$resultado = mysqli_query($conexao, $query);
	
	while ($usuario_array = mysqli_fetch_assoc($resultado)) {
		//Instanciação de Objeto
		$usuario = new Usuario();

		//Atribuição dos atributos
		$usuario->id = $usuario_array['id'];
		$usuario->nome = $usuario_array['nome'];
		$usuario->email = $usuario_array['email'];
		$usuario->senha = $usuario_array['senha'];
		$usuario->permissao = $usuario_array['permissao'];

		array_push($usuarios, $usuario);
	}
	return $usuarios;

}

function buscaUsuario ($conexao, $id) {
	$query = "SELECT * FROM usuarios WHERE id={$id}";
	$resultado = mysqli_query($conexao, $query);
	$usuario_buscado = mysqli_fetch_assoc($resultado); //é um array
	
	//Instanciação do objeto
	$usuario = new Usuario();

	$usuario->id = $usuario_buscado['id'];
	$usuario->nome = $usuario_buscado['nome'];
	$usuario->email = $usuario_buscado['email'];
	$usuario->senha = $usuario_buscado['senha'];
	$usuario->permissao = $usuario_buscado['permissao'];

	return $usuario;
}

function alteraUsuario ($conexao, Usuario $usuario) {
	//Evita ataque de sql injection -> aceita a aspa simples Ex. Joana D'arc
	$usuario->nome = mysqli_real_escape_string($conexao, $usuario->nome);
	$usuario->email = mysqli_real_escape_string($conexao, $usuario->email);
	$usuario->senha = mysqli_real_escape_string($conexao, $usuario->senha);


	if (strlen($usuario->senha) == 32) {
		$query = "UPDATE usuarios SET nome = '{$usuario->nome}', email = '{$usuario->email}', senha = '{$usuario->senha}', permissao = '{$usuario->permissao}' WHERE id={$usuario->id}";
	}

	else {
		$usuario->senha = md5($usuario->senha);
		$query = "UPDATE usuarios SET nome = '{$usuario->nome}', email = '{$usuario->email}', senha = '{$usuario->senha}', permissao = '{$usuario->permissao}' WHERE id={$usuario->id}";
	}
	
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}

function alteraPerfil ($conexao, Usuario $usuario) {
	//Evita ataque de sql injection -> aceita a aspa simples Ex. Joana D'arc
	$usuario->nome = mysqli_real_escape_string($conexao, $usuario->nome);
	$usuario->email = mysqli_real_escape_string($conexao, $usuario->email);
	$usuario->senha = mysqli_real_escape_string($conexao, $usuario->senha);

	if (strlen($usuario->senha) == 32) {
		$query = "UPDATE usuarios SET nome = '{$usuario->nome}', senha = '{$usuario->senha}' WHERE id={$usuario->id}";
	}

	else {
		$usuario->senha = md5($usuario->senha);
		$query = "UPDATE usuarios SET nome = '{$usuario->nome}', senha = '{$usuario->senha}' WHERE id={$usuario->id}";
	}
	
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}










