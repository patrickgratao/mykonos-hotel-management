<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-hospede.php");

	$busca = $_GET['pesquisaHospede'];

	$encontrados = pesquisaHospede($conexao, $busca);
?>
<h2>Resultados da Pesquisa</h2>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome da Categoria</th>
      <th scope="col right">Mais Ações</th>
    </tr>
  </thead>
  <tbody>