<!DOCTYPE html>
<html>
<head>
	<title>Mykonos - Sistema de Cadastro de Hóspedes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sistema.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.jpg"/>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  
  <!-- Código que verifica e preenche o CEP automaticamente -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

  <script type="text/javascript"><?php include("assets/js/buscaCep.js") ?></script> 
  <!-- fim do código -->
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Mykonos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hóspedes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="listar-hospedes.php">Todos os hóspedes</a>
              <a class="dropdown-item" href="cadastrar-hospede.php">Cadastrar hóspede</a>
              <a class="dropdown-item" href="editar-hospede.php">Editar hóspede</a>
              <a class="dropdown-item" href="#">Aniversariantes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="listar-categorias.php">Todas as categorias</a>
              <a class="dropdown-item" href="cadastrar-categoria.php">Cadastrar categoria</a>
            </div>
          </li>
         </ul>
        <form class="form-inline my-2 my-lg-0 pesquisaHospede" action="pesquisar.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar hóspede..." aria-label="Pesquisar" name="pesquisaHospede">
          <button class="btn btn-success my-2 my-sm-0" type="submit"><img src="assets/img/search.png"></button>
        </form>
      </div>
    </nav>
	<div class="container">
		<div class="principal">
<!-- Fim do cabeçalho.php -->			