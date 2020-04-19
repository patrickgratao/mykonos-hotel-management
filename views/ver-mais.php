<?php 
require_once("../controllers/logica-usuario.php");
require_once("../models/banco.php");
require_once("../models/banco-hospede.php");

  verificaUsuario(); //verifica se o usuário está logado
  require_once("../partials/_header.php"); 

  $id = $_GET['id'];
  $dadosHospede = buscaHospede($conexao, $id);

?>
  

  
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
          <br>
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="notika-icon notika-windows"></i>
                  </div>
                  <div class="breadcomb-ctn hospede-dados">
                    <h2>Informações do Hóspede: <span class="hospede-titulo"><?=$dadosHospede->nome?></span></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                <div class="breadcomb-report btn-group-mykonos">
                  
                  <form method="POST" action="ficha-hospede.php">
                    <input type="hidden" name="id" value="<?=$dadosHospede->id?>">
                    <button title="Ficha do Hóspede" class="btn">F.N.R.H</button>
                  </form>
                  <form action="editar-hospede.php" method="POST">
                    <input type="hidden" name="id" value="<?=$dadosHospede->id?>">
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
                <p class="ctn-ads"><span class="dados-contato-titulo">CPF: </span><?=$dadosHospede->cpf?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Sexo: </span><span class="sexo-hospede"><?=$dadosHospede->sexo?></span></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo" >Data Nascimento: </span><span class="data-nascimento"><?=$dadosHospede->dataNascimento?></span></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Estado Civil: </span><span class="dados-estado-civil"><?=$dadosHospede->estadoCivil?></span></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Categoria do Hóspede: </span><?=$dadosHospede->categoria->nome?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="contact-list">
            <div class="contact-ctn">
              <div class="contact-ad-hd">
                <h2>Dados de Contato</h2><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Telefone:</span> <?=$dadosHospede->telefone?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Celular / Whatsapp:</span> <?=$dadosHospede->celular?><!--<a href="https://api.whatsapp.com/send?phone=55<?=$dadosHospede->celular?>&text=Oii <?=$dadosHospede->nome ?>, tudo bem? Aqui é o Patryck da Pousada Ágape, foi um prazer receber você no dia <?=$dadosHospede->dataCheckin?>. Obrigada por nos escolher e volte sempre. Grande abraço!" target="_blank"><img src="assets\img\mykonos\whatsapp.png" class="whatsapp-hospede"></a>--></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">E-mail:</span> <?=$dadosHospede->email?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Endereço: </span><?=$dadosHospede->rua?> <?=$dadosHospede->bairro?> <?=$dadosHospede->cidade?> - <?=$dadosHospede->estado?> <?=$dadosHospede->cep?></p>
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
                <p class="ctn-ads"><span class="dados-contato-titulo">Último Check-In:</span> <?=$dadosHospede->dataCheckin?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Quantidade de Dias Hospedados:</span> <?= $dadosHospede->qtdDiarias ?> <?= ($dadosHospede->qtdDiarias > 1) ? "dias" : "dia"  ?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Preço da Diária:</span> R$ <?=$dadosHospede->precoDiaria?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Quantidade de Acompanhantes: </span><?=$dadosHospede->qtdAcompanhantes?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="contact-list">
            <div class="contact-ctn">
              <div class="contact-ad-hd">
                <h2>Informações Adicionais</h2><br>
                <p class="ctn-ads"><?=$dadosHospede->infoExtras?></p><br>
                <p>Última edição feita por: <?=$dadosHospede->cadastradoPor?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <form method="POST" action="editar-hospede.php">
        <input type="hidden" name="id" value="<?=$dadosHospede->id?>">
        <button title="Editar Hóspede" class="btn btn-danger notika-btn-danger btn-lg waves-effect">Editar Hóspede</button>
        <a class="btn btn-success notika-btn-primary btn-lg waves-effect" href="listar-hospedes.php">Ver todos os Hóspedes</a>
      </form>
      
    </div>
  </div>
</div>   	

<?php require_once("../partials/_footer.php"); ?>