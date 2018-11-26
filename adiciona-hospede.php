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

?>

<?php
	
	if (cadastraHospede($conexao, $nome, $cpf, $dataNascimento, $sexo, $telefone, $celular, $email, $estadoCivil, $cep, $rua, $bairro, $cidade, $estado)) { ?>
		
    <p class='alert alert-success'>O hóspede <strong><?= $nome ?></strong> foi cadastrado com sucesso!</p>
	<?php }

	else {
    $msg = mysqli_error($conexao); ?>
		<p class='alert alert-danger'>O hóspede não foi cadastrado! Erro: <?= $msg ?></p>
	<?php } 

  include("partials/_rodape.php") 

  ?>