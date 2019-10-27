<?php 
	require_once("conecta.php");
	require_once("class/Empresa.php");


function buscaUsuario ($conexao, $id) {
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