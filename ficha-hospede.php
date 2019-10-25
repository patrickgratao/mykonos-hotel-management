<?php 
require_once("logica-usuario.php");
require_once("banco/banco.php");
require_once("banco/banco-hospede.php");

  verificaUsuario(); //verifica se o usuário está logado
  require_once("partials/_header.php"); 

  $id = $_GET['id'];
  $dadosHospede = buscaHospede($conexao, $id);

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
                    <h2>Ficha do Hóspede: <span class="hospede-titulo"><?=$dadosHospede->nome?></span></h2>
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
        <table>
          <table class="table">
            <tbody>
              <tr>
                <td><strong>Nome:</strong><?=$dadosHospede->nome?></td>
                <td><strong>Data de Nascimento:</strong> <?=$dadosHospede->dataNascimento?></td>
                <td><strong>Sexo: </strong><?=$dadosHospede->sexo?></td>
                <td><strong>Email: </strong><?=$dadosHospede->email?></td>
              </tr>
              <tr>
                <td>Telefone</td>
                <td>CPF</td>
                <td>CE</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>   	

<?php require_once("partials/_footer.php"); ?>