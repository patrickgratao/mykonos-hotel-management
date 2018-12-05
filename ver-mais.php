<?php 
	include("partials/_header.php"); 
	include("banco/conecta.php");
	include("banco/banco.php");
	include("banco/banco-hospede.php");

	$id = $_POST['id'];
	$dadosHospede = visualizaHospede($conexao, $id);

?>

<div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="notika-icon notika-windows"></i>
                  </div>
                  <div class="breadcomb-ctn hospede-dados">
                    <h2>Informações do Hóspede: <span class="hospede-titulo"><?=$dadosHospede['nome']?></span></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                <div class="breadcomb-report">
                  <form action="editar-hospede.php" method="POST">
                    <input type="hidden" name="id" value="<?=$dadosHospede['id']?>">
                    <button href="editar-hospede.php" data-toggle="tooltip" data-placement="left" title="Editar Hóspede" class="btn"><i class="notika-icon notika-edit"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcomb area End-->

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
  <form method="POST" action="editar-hospede.php">
    <input type="hidden" name="id" value="<?=$dadosHospede['id']?>">
    <button title="Editar Hóspede" class="btn btn-danger notika-btn-danger btn-lg waves-effect">Editar Hóspede</button>
    <a class="btn btn-success notika-btn-primary btn-lg waves-effect" href="listar-hospedes.php">Ver todos os Hóspedes</a>
  </form>

    	

<?php include("partials/_footer.php"); ?>