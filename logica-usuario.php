<?php 
	session_start ();

	function usuarioEstaLogado () {
		return isset($_SESSION["usuario_logado"]);

	}

	function verificaUsuario () {
		if (!usuarioEstaLogado()) {
			echo "<script>location.href='entrar.php?falhaDeSeguranca=true';</script>";
     		die();
		}
	}

	function usuarioLogado () {
		return $_SESSION["usuario_logado"];
	}

	function logaUsuario ($email) {
		$_SESSION["usuario_logado"] = $email;	
	}