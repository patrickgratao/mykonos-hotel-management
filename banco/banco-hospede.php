<?php 
	//Aqui ficam todas as funções relacionadas ao banco hóspedes

  function cadastraHospede ($conexao, $nome, $cpf, $dataNascimento, $sexo, $telefone, $celular, $email, $estadoCivil, $cep, $rua, $bairro, $cidade, $estado) {

        $query = "insert into hospedes (nome, cpf, data_nascimento, sexo, telefone, celular, email, estado_civil, cep, rua, bairro, cidade, estado) values ('{$nome}', '{$cpf}', '{$dataNascimento}', '{$sexo}', '{$telefone}', '{$celular}', '{$email}', '{$estadoCivil}', '{$cep}', '{$rua}', '{$bairro}', '{$cidade}', '{$estado}')";
        $resultadoConexao = mysqli_query($conexao, $query);
        return $resultadoConexao;
  }

  function listaHospedes ($conexao){
		$hospedes = array(); 
		$query = "select * from hospedes ORDER BY nome";
		$resultado = mysqli_query($conexao, $query);

		while($hospede = mysqli_fetch_assoc($resultado)) {
			array_push($hospedes, $hospede); // insere no array hóspedes o hospede da vez
		}
		return $hospedes; //retorna o array com todos os hóspedes
	}