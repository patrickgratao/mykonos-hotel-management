<?php 
  require_once("../controllers/logica-usuario.php");
  require_once("../models/banco-empresa.php");

  verificaUsuario(); //verifica se o usuário está logado
	verificaPermissao(); //verifica nível de permissão do usuário logado

  require_once("../partials/_header.php"); 
  
  $id = $_GET['id'];
  
  $dadosEmpresa = buscaEmpresa($conexao, $id);
  
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
                    <h2>Dados da Empresa - <?=$dadosEmpresa->nomeFantasia?></span></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                <div class="breadcomb-report">
                  <form action="editar-empresa.php" method="POST">
                    <input type="hidden" name="id" value="<?=$dadosEmpresa->id?>">
                    <button data-toggle="tooltip" data-placement="left" title="Editar Empresa" class="btn"><i class="notika-icon notika-edit"></i></button>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="contact-list">
            <div class="contact-ctn">
              <div class="contact-ad-hd">
                <h2>Informações Gerais</h2><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">CNPJ: </span><?=$dadosEmpresa->cnpj?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Nome Fantasia: </span><?=$dadosEmpresa->nomeFantasia?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Razão Social: </span><?=$dadosEmpresa->razaoSocial?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Endereço: </span><?=$dadosEmpresa->endereco?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Telefone: </span><?=$dadosEmpresa->telefone?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">E-mail: </span><?=$dadosEmpresa->email?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Site: </span><a target="_blank" href="<?=$dadosEmpresa->site?>"><?=$dadosEmpresa->site?></a></p><br>
                <p></p>
              </div>
            </div>
          </div>
        </div>
  </div>
      <br>
     <!--  <?php 
        if ($usuario->email == $current_user_email) {
          //executa o editar empresa
        }
       ?> -->
      <form method="POST" action="editar-empresa.php">
        <input type="hidden" name="id" value="<?=$dadosEmpresa->id?>">
        <button title="Editar Empresa" class="btn btn-danger notika-btn-danger btn-lg waves-effect">Editar Empresa</button>
      </form>  
      
    </div>
  </div>
<?php require_once("../partials/_footer.php"); ?>