<?php 
	require_once("logica-usuario.php");
	require_once("banco/banco-usuario.php");

  	verificaUsuario(); //verifica se o usuário está logado
  	require_once("partials/_header.php"); 

	$id = $_GET['id'];
	$dadosUsuario = buscaUsuario($conexao, $id);

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
                    <h2>Informações do Usuário: <span class="hospede-titulo"><?=$_SESSION['nome_usuario']?></span></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                <div class="breadcomb-report">
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="contact-list">
            <div class="contact-ctn">
              <div class="contact-ad-hd">
                <h2>Informações</h2><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Nome: </span><?=$dadosUsuario->nome?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">Função: </span><?=$dadosUsuario->permissao?></p><br>
                <p class="ctn-ads"><span class="dados-contato-titulo">E-mail: </span><?=$dadosUsuario->email?></p><br>
              </div>
            </div>
          </div>
        </div>
  </div>
      <br>
     <!--  <?php 
      	if ($usuario->email == $current_user_email) {
      		//executa o editar perfil
      	}
       ?> -->
      <form method="POST" action="editar-usuario.php">
        <input type="hidden" name="id" value="<?=$dadosUsuario->id?>">
        <button title="Editar Perfil" class="btn btn-danger notika-btn-danger btn-lg waves-effect">Editar Perfil</button>
      </form>  
      
    </div>
  </div>
<?php require_once("partials/_footer.php"); ?>