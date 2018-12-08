<?php 
    include("banco/conecta.php"); 
    include("banco/banco-usuario.php"); 
    include("logica-usuario.php");

    $usuario =  buscaUsuario($conexao, $_POST['emailUsuario'], $_POST['senhaUsuario']);

    if ($usuario == null) {
    	header("Location: entrar.php?login=0");
    	
    }
    else {
        logaUsuario($usuario['email']);
    	header("Location: index.php?login=1");
    }

    die();