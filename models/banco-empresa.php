<?php 
	require_once("conecta.php");
	require_once("../class/Empresa.php");


function buscaEmpresa ($conexao, $id) {
	$query = "SELECT * FROM empresa WHERE id={$id}";
	$resultado = mysqli_query($conexao, $query);
	$empresa_buscada = mysqli_fetch_assoc($resultado); //é um array
	
	//Instanciação do objeto
	$empresa = new Empresa();

	$empresa->id = $empresa_buscada['id'];
	$empresa->cnpj = $empresa_buscada['cnpj'];
	$empresa->nomeFantasia = $empresa_buscada['nome_fantasia'];
	$empresa->razaoSocial = $empresa_buscada['razao_social'];
	$empresa->endereco = $empresa_buscada['endereco'];
	$empresa->telefone = $empresa_buscada['telefone'];
	$empresa->email = $empresa_buscada['email'];
	$empresa->site = $empresa_buscada['site'];

	return $empresa;
}

function alteraEmpresa ($conexao, Empresa $empresa) {

	$empresa->cnpj = mysqli_real_escape_string($conexao, $empresa->cnpj);
	$empresa->nomeFantasia = mysqli_real_escape_string($conexao, $empresa->nomeFantasia);
	$empresa->razaoSocial = mysqli_real_escape_string($conexao, $empresa->razaoSocial);
	$empresa->endereco = mysqli_real_escape_string($conexao, $empresa->endereco);
	$empresa->telefone = mysqli_real_escape_string($conexao, $empresa->telefone);
	$empresa->email = mysqli_real_escape_string($conexao, $empresa->email);
	$empresa->site = mysqli_real_escape_string($conexao, $empresa->site);

	$query = "UPDATE empresa SET cnpj = '{$empresa->cnpj}', nome_fantasia = '{$empresa->nomeFantasia}', razao_social = '{$empresa->razaoSocial}', endereco = '{$empresa->endereco}', telefone = '{$empresa->telefone}', email = '{$empresa->email}', site = '{$empresa->site}' WHERE id = '{$empresa->id}' ";

	return mysqli_query($conexao, $query);
}