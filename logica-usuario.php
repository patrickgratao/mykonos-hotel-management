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

function logaUsuario ($email) {
	$_SESSION["usuario_logado"] = $email;	
	$_SESSION["permissao_usuario"] = $permissao;
}

function logout () {
	session_destroy();
}