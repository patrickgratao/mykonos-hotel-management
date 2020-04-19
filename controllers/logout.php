<?php 

include("logica-usuario.php");
logout();
session_start();
$_SESSION["success"] = "Deslogado com sucesso!";
header("Location: ../entrar.php");