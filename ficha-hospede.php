<?php 
require_once("logica-usuario.php");
require_once("banco/banco.php");
require_once("banco/banco-hospede.php");

  verificaUsuario(); //verifica se o usuário está logado
  require_once("partials/_header.php"); 

  $id = $_POST['id'];
  $dadosHospede = buscaHospede($conexao, $id);

?>

<style>
  .menu-principal {display: none;}

</style>
  <!-- Contact area Start-->
  <div class="contact-area">
    <div class="container">
      <div class="row">
        <center>
          <h2 class="fnrh">Ficha Nacional de Registro de Hóspedes</h2><br>
          <h4>Hotel Pousada Ágape -  13.578.776/0001-35 - Trindade / GO</h4><br>
          <a class="btn btn-danger notika-btn-primary naoImprimir btn-lg " onclick="window.print()">Imprimir</a>
          <br><br>
        </center>
       
        <table>
          <table class="table">
            <tbody>
              <tr>
                <td><strong>Nome Completo: </strong><?=$dadosHospede->nome?></td>
                <td> <strong> Telefone: </strong><?=$dadosHospede->telefone ?></td>
                <td> <strong> Celular: </strong><?=$dadosHospede->celular ?></td>
              </tr>
              <tr>
                <td><strong>CPF: </strong><?=$dadosHospede->cpf ?></td>
                <td><strong>Data de Nascimento:</strong> <?=$dadosHospede->dataNascimento?></td>
                <td><strong>Sexo: </strong><?=$dadosHospede->sexo == 'm' ? "Masculino" : "Feminino" ?></td>
                
              </tr>
              <tr>
                <td><strong>CEP: </strong><?=$dadosHospede->cep ?></td>
                <td><strong>Rua:</strong> <?=$dadosHospede->rua?></td>
                <td><strong>Bairro:</strong> <?=$dadosHospede->bairro?> </td>
                </tr>
              <tr>
                
              </tr>
              <tr>
              <td><strong>Cidade/Estado:</strong> <?=$dadosHospede->cidade?> - <?=$dadosHospede->estado?></td>
              <td><strong>Data de Check-In: </strong><?=$dadosHospede->dataCheckin ?></td>
              <td><strong>Data de Check-Out: </strong><?=$dadosHospede->dataCheckout ?></td>
              </tr>
              <tr>
                <td colspan="3"><strong>Categoria: </strong><?=$dadosHospede->categoria->nome?></td>
              </tr>  
              <tr>
                <td colspan="3"><strong>Observações: </strong> <?=$dadosHospede->infoExtras?></td>
              </tr>
            </tbody>
        </table>
        <a class="btn btn-primary notika-btn-primary btn-lg  naoImprimir" href="ver-mais.php?id=<?=$dadosHospede->id?>">Ver Hóspede</a>
    </div>
  </div>
</div>   

<section>
  <?php require_once("partials/_footer.php"); ?>
</section>