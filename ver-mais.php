<?php 
	include("partials/_cabecalho.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-hospede.php");

	$id = $_GET['id'];
	$dadosHospede = visualizaHospede($conexao, $id);

?>

	<div class="col-md-12 order-md-1 jumbotron">
    	<h2 class="md-12 informacoes-hospede-titulo">Informações do Hóspede</h2>
    	<br>
    	<h3 class="informacoes-hospede-nome"><?=$dadosHospede['nome']?></h3>
    	<div class="dropdown-divider"></div><br>
    	<div class="informacoes-hospede">
    		<p><strong>CPF: </strong><span class="ver-dado-hospede"><?=$dadosHospede['cpf']?></span></p>
  			<p><strong>Data de Nascimento: </strong><span class="ver-dado-hospede"><?=$dadosHospede['data_nascimento']?></span></p>
  			<p><strong>Sexo: </strong><span class="ver-dado-hospede"><?=$dadosHospede['sexo']?></span></p>
  			<p><strong>Telefone com DDD: </strong><span class="ver-dado-hospede"><?=$dadosHospede['telefone']?></span></p>
  			<p><strong>Celular com DDD: </strong><span class="ver-dado-hospede"><?=$dadosHospede['celular']?></span></p>
  			<p><strong>E-mail: </strong><span class="ver-dado-hospede"><?=$dadosHospede['email']?></span></p>
  			<p><strong>Estado Civil: </strong><span class="ver-dado-hospede"><?=$dadosHospede['estado_civil']?></span></p>
  			<p><strong>Endereço: </strong><span class="ver-dado-hospede"><?=$dadosHospede['rua']?>, <?=$dadosHospede['bairro']?>, <?=$dadosHospede['cidade']?> - <?=$dadosHospede['estado']?>, <?=$dadosHospede['cep']?>  </span></p>
  			<p><strong>Último Check-In: </strong><span class="ver-dado-hospede"><?=$dadosHospede['data_checkin']?></span></p>
  			<p><strong>Quantidade de Dias hospedado </strong><span class="ver-dado-hospede"><?=$dadosHospede['qtd_diarias']?></span></p>
  			<p><strong>Preço da Diária </strong><span class="ver-dado-hospede">R$ <?=$dadosHospede['preco_diaria']?></span></p>
  			<br>
  			<h3>Informações Adicionais</h3>
  			<br>
  			<p><span class="informacoes-extras-hospede"><?=$dadosHospede['info_extras']?></span></p>

		</div>
	</div>

    	<a class="mais-opcoes btn btn-success btn-md" href="listar-hospedes.php">Ver todos os Hóspedes</a>

<?php include("partials/_rodape.php"); ?>