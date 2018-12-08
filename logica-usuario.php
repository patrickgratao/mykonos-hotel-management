<?php 

	function usuarioEstaLogado () {
		return isset($_COOKIE["usuario_logado"]);

	}

	function verificaUsuario () {
		if (!usuarioEstaLogado()) {
			// header("Location: index.php?falhaDeSeguranca=true");
			echo "<script>location.href='entrar.php?falhaDeSeguranca=true';</script>";
     		die();
		}
	}

	function usuarioLogado () {
		return $_COOKIE["usuario_logado"];
	}

	function logaUsuario ($email) {
		setcookie("usuario_logado", $email, time() + 60);
	}