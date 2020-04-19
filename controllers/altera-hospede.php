<?php
	require_once("../controllers/logica-usuario.php"); //a sessão tem que ser a primeira a inicializar, antes de qualquer html 
	require_once("../models/banco-hospede.php");
	verificaUsuario(); //verifica se o usuário está logado
	require_once("../partials/_header.php");
	require_once("../class/Hospede.php"); 
	require_once("../class/Categoria.php"); 

	//Instanciação de objetos
	$hospede = new Hospede();
	$categoria = new Categoria();

	//Atribuições
	$categoria->id = $_POST["categoria_id"];

	$hospede->id = $_POST["id"];
	$hospede->nome = $_POST["nomeHospede"]; 	
	$hospede->cpf = $_POST["cpfHospede"];
	$hospede->dataNascimento = $_POST["nascimentoHospede"];
	$hospede->sexo = $_POST["sexoHospede"];
	$hospede->telefone = $_POST["telefoneHospede"];
	$hospede->celular = $_POST["celularHospede"];
	$hospede->email = $_POST["emailHospede"];
	$hospede->estadoCivil = $_POST["estadoCivilHospede"];
	$hospede->cep = $_POST["cepHospede"];
	$hospede->rua = $_POST["ruaHospede"];
	$hospede->bairro = $_POST["bairroHospede"];
	$hospede->cidade = $_POST["cidadeHospede"];
	$hospede->estado = $_POST["estadoHospede"];
	$hospede->categoria = $categoria;
	
	$hospede->dataCheckin = $_POST["dataCheckinHospede"];
	$hospede->dataCheckout = $_POST["dataCheckoutHospede"];
	$hospede->qtdDiarias = $_POST["quantidadeDiariasHospede"];
	$hospede->qtdAcompanhantes = $_POST["acompanhantesHospede"];
	$hospede->precoDiaria = $_POST["precoDiariaHospede"];
	
	$hospede->valorPago = $_POST["valorPagoHospede"];
	$hospede->precoTotal = $_POST["precoTotal"];
	$hospede->totalPagar = $_POST["precoTotalPagar"];
	$hospede->infoExtras = $_POST["informacoesAdicionais"];
	$hospede->cadastradoPor = $_POST["cadastradoPor"];


	if (alteraHospede($conexao, $hospede)) { 

		$_SESSION["success"] = "Hóspede alterado com sucesso!";
		echo "<script>location.href='../views/ver-mais.php?id=$hospede->id';</script>";
		die();
	}

	else {
		$msg = mysqli_error($conexao);
		$_SESSION["danger"] = "O hóspede não pôde ser alterado, tente novamente!";
		echo "<script>location.href='../views/ver-mais.php?id=$hospede->id';</script>"; //<script>location.href='listar-hospedes.php?cadastrado=false';</script>
		die();
	}
