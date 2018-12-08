<?php 
    include("logica-usuario.php");
    include("banco/conecta.php"); 
    include("banco/banco-usuario.php"); 
    

    $usuario =  buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

    if ($usuario == null) {
    	header("Location: entrar.php?login=0");
    	
    }
    else {
        logaUsuario($usuario['email']);
    	header("Location: index.php?login=1");
    }

    die();