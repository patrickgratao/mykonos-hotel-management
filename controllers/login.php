<?php 
require_once("logica-usuario.php");
require_once("../models/conecta.php"); 
require_once("../models/banco-usuario.php"); 

$usuario =  possoLogar($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválidos!";
    header("Location: ../entrar.php");
    
}
else {
    $_SESSION["success"] = "{$usuario['nome']}, bem vindo de volta!";
    logaUsuario($usuario['email'], $usuario['nome'], $usuario['permissao'], $usuario['id']);

    header("Location: ../views/index.php");
}

die();