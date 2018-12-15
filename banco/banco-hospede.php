<?php 
	//Aqui ficam todas as funções relacionadas ao banco hóspedes
require_once("conecta.php");

function cadastraHospede ($conexao, Hospede $hospede) {
	$hospede->nome = mysqli_real_escape_string($conexao, $hospede->nome);
	$hospede->email = mysqli_real_escape_string($conexao, $hospede->email);
	$hospede->rua = mysqli_real_escape_string($conexao, $hospede->rua);
	$hospede->bairro = mysqli_real_escape_string($conexao, $hospede->bairro);
	$hospede->cidade = mysqli_real_escape_string($conexao, $hospede->cidade);
	$hospede->estado = mysqli_real_escape_string($conexao, $hospede->estado);
	$hospede->infoExtras = mysqli_real_escape_string($conexao, $hospede->infoExtras);

	$query = "insert into hospedes (nome, cpf, data_nascimento, sexo, telefone, celular, email, estado_civil, cep, rua, bairro, cidade, estado, data_checkin, data_checkout, qtd_diarias, qtd_pagantes, preco_diaria, valor_pago, preco_total, total_pagar, info_extras, categoria_id) values ('{$hospede->nome}', '{$hospede->cpf}', '{$hospede->dataNascimento}', '{$hospede->sexo}', '{$hospede->telefone}', '{$hospede->celular}', '{$hospede->email}', '{$hospede->estadoCivil}', '{$hospede->cep}', '{$hospede->rua}', '{$hospede->bairro}', '{$hospede->cidade}', '{$hospede->estado}', '{$hospede->dataCheckin}', '{$hospede->dataCheckout}', {$hospede->qtdDiarias}, {$hospede->qtdAcompanhantes}, {$hospede->precoDiaria}, {$hospede->valorPago}, {$hospede->precoTotal}, {$hospede->totalPagar}, '{$hospede->infoExtras}', {$hospede->categoriaHospede})";
	$resultadoConexao = mysqli_query($conexao, $query);
	return $resultadoConexao;
}

function alteraHospede ($conexao, Hospede $hospede) {

	$hospede->nome = mysqli_real_escape_string($conexao, $hospede->nome);
	$hospede->email = mysqli_real_escape_string($conexao, $hospede->email);
	$hospede->rua = mysqli_real_escape_string($conexao, $hospede->rua);
	$hospede->bairro = mysqli_real_escape_string($conexao, $hospede->bairro);
	$hospede->cidade = mysqli_real_escape_string($conexao, $hospede->cidade);
	$hospede->estado = mysqli_real_escape_string($conexao, $hospede->estado);
	$hospede->infoExtras = mysqli_real_escape_string($conexao, $hospede->infoExtras);

	$query = "UPDATE hospedes SET nome = '{$hospede->nome}', cpf = '{$hospede->cpf}', data_nascimento = '{$hospede->dataNascimento}', sexo = '{$hospede->sexo}', telefone = '{$hospede->telefone}', celular = '{$hospede->celular}', email = '{$hospede->email}', estado_civil = '{$hospede->estadoCivil}', cep = '{$hospede->cep}', rua = '{$hospede->rua}', bairro = '{$hospede->bairro}', cidade = '{$hospede->cidade}', estado = '{$hospede->estado}', data_checkin = '{$hospede->dataCheckin}', data_checkout = '{$hospede->dataCheckout}', qtd_diarias = '{$hospede->qtdDiarias}', qtd_pagantes = '{$hospede->qtdAcompanhantes}', preco_diaria = {$hospede->precoDiaria}, valor_pago = {$hospede->valorPago}, preco_total = {$hospede->precoTotal}, total_pagar = {$hospede->totalPagar}, info_extras = '{$hospede->infoExtras}', categoria_id = {$hospede->categoriaHospede}  WHERE id = '{$hospede->id}' ";

	return mysqli_query($conexao, $query);
}

function listaHospedes ($conexao){
	$hospedes = array(); 
	$query = "select p.*, c.nome as categoria_nome from hospedes as p join categorias as c on p.categoria_id = c.id";
	$resultado = mysqli_query($conexao, $query);

	while($hospede = mysqli_fetch_assoc($resultado)) {
			array_push($hospedes, $hospede); // insere no array hóspedes o hospede da vez
		}
		return $hospedes; //retorna o array com todos os hóspedes
	}


	function visualizaHospede ($conexao, $id){
		$hospedes = array();
		$query = "select p.*, c.nome as categoria_nome from hospedes as p join categorias as c on p.categoria_id = c.id WHERE p.id={$id}";
		
		//$query = "SELECT * FROM hospedes WHERE id={$id}";
		$resultado = mysqli_query($conexao, $query);
		array_push($hospedes, $resultado);
		$hospedes = mysqli_fetch_assoc($resultado);

		return $hospedes; 
	}
