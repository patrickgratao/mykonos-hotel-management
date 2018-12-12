<?php 
	include("logica-usuario.php");
	include("partials/_header.php");
	

	verificaUsuario(); //verifica se o usuário está logado
	include("partials/mensagens.php"); //Inclui as mensagens de erro ou sucesso
?>

	<div class="jumbotron">
		<h2 class="text-center">Mykonos - Sistema de Cadastro de Hóspedes</h2>
		<hr>
		<br>
		<div class="row">
			<a href="cadastrar-hospede.php" class="cartao-destaque">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                <div class="color-single nk-amber">
						<div class="card text-white bg-dark mb-3">
				  			<h4 class="card-header text-center card-title">Cadastrar Hóspedes</h4>
				  			<div class="card-body">
				   	 			<p class="card-text text-center"><img src="assets/img/guest.png"></p>
				  			</div>
				  		</div>
	                 </div>
	            </div>
       		</a>
       		<a href="#birthday" class="cartao-destaque">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                <div class="color-single nk-amber">
						<div class="card text-white bg-dark mb-3">
				  			<h4 class="card-header text-center card-title">Próximos Aniversários</h4>
				  			<div class="card-body">
				   	 			<p class="card-text text-center"><img src="assets/img/birthday.png"></p>
				  			</div>
				  		</div>
	                 </div>
	            </div>
       		</a>
       		<a href="listar-hospedes.php" class="cartao-destaque">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                <div class="color-single nk-amber">
						<div class="card text-white bg-dark mb-3">
				  			<h4 class="card-header text-center card-title">Hóspedes Cadastrados</h4>
				  			<div class="card-body">
				   	 			<p class="card-text text-center"><img src="assets/img/logout.png"></p>
				  			</div>
				  		</div>
	                 </div>
	            </div>
       		</a>
       	</div>
    </div>
<?php include("partials/_footer.php") ?>