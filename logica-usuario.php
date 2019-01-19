<?php 

include("inicia-sessao.php");

function usuarioEstaLogado () {
	return isset($_SESSION["usuario_logado"]);

}

function verificaUsuario () {
	if (!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Você não possui acesso à esta funcionalidade!";
		echo "<script>location.href='entrar.php';</script>";
		die();
	}
}

function usuarioLogado () {
	return $_SESSION["usuario_logado"];
}

function permissaoUsuario() {
	return $_SESSION["permissao_usuario"] = $permissao;
}

function logaUsuario ($email, $nome, $permissao, $id) {
	//Armazenando dados vitais do usuário em sessões 
	$_SESSION["usuario_logado"] = $email; 
	$_SESSION["nome_usuario"] = $nome;
	$_SESSION['nivel_usuario'] = $permissao;
	$_SESSION['id_usuario'] = $id;
}

function logout () {
	session_destroy();
}

function verificaPermissao () {
	if ($_SESSION['nivel_usuario'] != 'admin') {
		$_SESSION["danger"] = "Você não possui permissão para realizar esta ação!";
		echo "<script>location.href='index.php';</script>";
		die();
	}
}