<?php 
	//Aqui ficam todas as funções relacionadas ao banco hóspedes

  function cadastraHospede ($conexao, $nome, $cpf, $dataNascimento, $sexo, $telefone, $celular, $email, $estadoCivil, $cep, $rua, $bairro, $cidade, $estado, $dataCheckin, $dataCheckout, $qtdDiarias, $qtdAcompanhantes, $precoDiaria, $valorPago, $precoTotal, $totalPagar, $infoExtras, $categoriaHospede) {

        $query = "insert into hospedes (nome, cpf, data_nascimento, sexo, telefone, celular, email, estado_civil, cep, rua, bairro, cidade, estado, data_checkin, data_checkout, qtd_diarias, qtd_pagantes, preco_diaria, valor_pago, preco_total, total_pagar, info_extras, categoria_id) values ('{$nome}', '{$cpf}', '{$dataNascimento}', '{$sexo}', '{$telefone}', '{$celular}', '{$email}', '{$estadoCivil}', '{$cep}', '{$rua}', '{$bairro}', '{$cidade}', '{$estado}', '{$dataCheckin}', '{$dataCheckout}', {$qtdDiarias}, {$qtdAcompanhantes}, {$precoDiaria}, {$valorPago}, {$precoTotal}, {$totalPagar}, '{$infoExtras}', {$categoriaHospede})";
        $resultadoConexao = mysqli_query($conexao, $query);
        return $resultadoConexao;
  }

  function alteraHospede ($conexao, $nome, $cpf, $dataNascimento, $sexo, $telefone, $celular, $email, $estadoCivil, $cep, $rua, $bairro, $cidade, $estado, $dataCheckin, $dataCheckout, $qtdDiarias, $qtdAcompanhantes, $precoDiaria, $valorPago, $precoTotal, $totalPagar, $infoExtras, $categoriaHospede, $id) {

  		$query = "UPDATE hospedes SET nome = '{$nome}', cpf = '{$cpf}', data_nascimento = '{$dataNascimento}', sexo = '{$sexo}', telefone = '{$telefone}', celular = '{$celular}', email = '{$email}', estado_civil = '{$estadoCivil}', cep = '{$cep}', rua = '{$rua}', bairro = '{$bairro}', cidade = '{$cidade}', estado = '{$estado}', data_checkin = '{$dataCheckin}', data_checkout = '{$dataCheckout}', qtd_diarias = '{$qtdDiarias}', qtd_pagantes = '{$qtdAcompanhantes}', preco_diaria = {$precoDiaria}, valor_pago = {$valorPago}, preco_total = {$precoTotal}, total_pagar = {$totalPagar}, info_extras = '{$infoExtras}', categoria_id = {$categoriaHospede}  WHERE id = '{$id}' ";

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
