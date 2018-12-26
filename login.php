<?php 
require_once("logica-usuario.php");
require_once("banco/conecta.php"); 
require_once("banco/banco-usuario.php"); 

$usuario =  possoLogar($conexao, $_POST["email"], $_POST["senha"]);

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