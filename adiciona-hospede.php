<?php 
  include("partials/_cabecalho.php"); 
  include("banco/conecta.php");
  include("banco/banco-hospede.php");

	$nome = $_GET["nomeHospede"]; 	
	$cpf = $_GET["cpfHospede"];
	$dataNascimento = $_GET["nascimentoHospede"];
	$sexo = $_GET["sexoHospede"];
	$telefone = $_GET["telefoneHospede"];
	$celular = $_GET["celularHospede"];
	$email = $_GET["emailHospede"];
	$estadoCivil = $_GET["estadoCivilHospede"];
	$cep = $_GET["cepHospede"];
	$rua = $_GET["ruaHospede"];
	$bairro = $_GET["bairroHospede"];
	$cidade = $_GET["cidadeHospede"];
	$estado = $_GET["estadoHospede"];
	//Informações de Reserva
	$dataCheckin = $_GET["dataCheckinHospede"];
	$dataCheckout = $_GET["dataCheckoutHospede"];
	$qtdDiarias = $_GET["quantidadeDiariasHospede"];
	$qtdAcompanhantes = $_GET["acompanhantesHospede"];
	$precoDiaria = $_GET["precoDiariaHospede"];
	// Informações de Pagamento
	$valorPago = $_GET["valorPagoHospede"];
	$precoTotal = $_GET["precoTotal"];
	$totalPagar = $_GET["precoTotalPagar"];
	$infoExtras = $_GET["informacoesAdicionais"];



	if (cadastraHospede($conexao, $nome, $cpf, $dataNascimento, $sexo, $telefone, $celular, $email, $estadoCivil, $cep, $rua, $bairro, $cidade, $estado, $dataCheckin, $dataCheckout, $qtdDiarias, $qtdAcompanhantes, $precoDiaria, $valorPago, $precoTotal, $totalPagar, $infoExtras)) { 
		
		echo "<script>location.href='listar-hospedes.php?cadastrado=true';</script>!";
		die();
	}

	else {
		$msg = mysqli_error($conexao);
		echo "<script>location.href='listar-hospedes.php?cadastrado=false';</script>"; //<script>location.href='listar-hospedes.php?cadastrado=false';</script>
		die();
	}
 ?>