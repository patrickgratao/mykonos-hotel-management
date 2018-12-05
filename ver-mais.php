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

      <!-- Contact area Start-->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-list">
                        <div class="contact-ctn">
                            <div class="contact-ad-hd">
                              <h2>Dados Pessoais</h2><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">CPF: </span><?=$dadosHospede['cpf']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Sexo: </span><?=$dadosHospede['sexo']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Data Nascimento: </span><?=$dadosHospede['data_nascimento']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Estado Civil: </span><?=$dadosHospede['estado_civil']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-list">
                        <div class="contact-ctn">
                            <div class="contact-ad-hd">
                              <h2>Dados de Contato</h2><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Telefone:</span> <?=$dadosHospede['telefone']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Celular / Whatsapp:</span> <?=$dadosHospede['celular']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">E-mail:</span> <?=$dadosHospede['email']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Endereço: </span><?=$dadosHospede['rua']?> <?=$dadosHospede['bairro']?> <?=$dadosHospede['cidade']?> - <?=$dadosHospede['estado']?> <?=$dadosHospede['cep']?></p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

            <div class="row">
              
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-list">
                        <div class="contact-ctn">
                            <div class="contact-ad-hd">
                              <h2>Dados de Hospedagem</h2><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Último Check-In:</span> <?=$dadosHospede['data_checkin']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Quantidade de Dias Hospedados:</span> <?=$dadosHospede['qtd_diarias']?> dias</p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Preço da Diária:</span> R$ <?=$dadosHospede['preco_diaria']?></p><br>
                              <p class="ctn-ads"><span class="dados-contato-titulo">Quantidade de Acompanhantes: </span><?=$dadosHospede['qtd_pagantes']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-list">
                        <div class="contact-ctn">
                            <div class="contact-ad-hd">
                              <h2>Informações Adicionais</h2><br>
                              <p class="ctn-ads"><?=$dadosHospede['info_extras']?></p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <br>
          <form method="POST" action="editar-hospede.php">
            <input type="hidden" name="id" value="<?=$dadosHospede['id']?>">
            <button title="Editar Hóspede" class="btn btn-danger notika-btn-danger btn-lg waves-effect">Editar Hóspede</button>
            <a class="btn btn-success notika-btn-primary btn-lg waves-effect" href="listar-hospedes.php">Ver todos os Hóspedes</a>
          </form>  
                
     </div>
   </div>
 </div>   	

<?php include("partials/_footer.php"); ?>