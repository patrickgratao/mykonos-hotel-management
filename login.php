<?php 
include("logica-usuario.php");
include("banco/conecta.php"); 
include("banco/banco-usuario.php"); 

$usuario =  buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválidos!";
    header("Location: entrar.php");
    
}
else {
    $_SESSION["success"] = "Bem vindo de volta!";
    logaUsuario($usuario['email']);
    header("Location: index.php");
}

die();