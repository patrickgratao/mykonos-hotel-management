<?php 
	include("logica-usuario.php"); //a sessão tem que ser a primeira a inicializar, antes de qualquer html
  	include("partials/_header.php"); 
  	include("banco/conecta.php");
  	include("banco/banco-hospede.php");
  	include("banco/banco-categoria.php");

	verificaUsuario(); //verifica se o usuário está logado

	$nome = $_POST["nomeHospede"]; 	
	$cpf = $_POST["cpfHospede"];
	$dataNascimento = $_POST["nascimentoHospede"];
	$sexo = $_POST["sexoHospede"];
	$telefone = $_POST["telefoneHospede"];
	$celular = $_POST["celularHospede"];
	$email = $_POST["emailHospede"];
	$estadoCivil = $_POST["estadoCivilHospede"];
	$cep = $_POST["cepHospede"];
	$rua = $_POST["ruaHospede"];
	$bairro = $_POST["bairroHospede"];
	$cidade = $_POST["cidadeHospede"];
	$estado = $_POST["estadoHospede"];
	$categoriaHospede = $_POST["categoria_id"];
	//Informações de Reserva
	$dataCheckin = $_POST["dataCheckinHospede"];
	$dataCheckout = $_POST["dataCheckoutHospede"];
	$qtdDiarias = $_POST["quantidadeDiariasHospede"];
	$qtdAcompanhantes = $_POST["acompanhantesHospede"];
	$precoDiaria = $_POST["precoDiariaHospede"];
	// Informações de Pagamento
	$valorPago = $_POST["valorPagoHospede"];
	$precoTotal = $_POST["precoTotal"];
	$totalPagar = $_POST["precoTotalPagar"];
	$infoExtras = $_POST["informacoesAdicionais"];



	if (cadastraHospede($conexao, $nome, $cpf, $dataNascimento, $sexo, $telefone, $celular, $email, $estadoCivil, $cep, $rua, $bairro, $cidade, $estado, $dataCheckin, $dataCheckout, $qtdDiarias, $qtdAcompanhantes, $precoDiaria, $valorPago, $precoTotal, $totalPagar, $infoExtras, $categoriaHospede)) { 
		
		echo "<script>location.href='listar-hospedes.php?cadastrado=true';</script>";
		die();
	}

	else {
		$msg = mysqli_error($conexao);
		echo $msg;
		//echo "<script>location.href='listar-hospedes.php?cadastrado=false';</script>"; //<script>location.href='listar-hospedes.php?cadastrado=false';</script>
		die();
	}