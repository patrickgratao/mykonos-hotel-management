<?php 
require_once("partials/_header.php");
?>

<form action="envia-contato.php" method="POST">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-element-list mg-t-30">
			<div class="cmp-tb-hd">
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group ic-cmp-int float-lb floating-lb">
						<div class="form-ic-cmp">
							<i class="notika-icon notika-support"></i>
						</div>
						<div class="nk-int-st">
							<input type="text" class="form-control" placeholder="Nome *"  id="nome" name="nome" autofocus required value="">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group ic-cmp-int float-lb floating-lb">
						<div class="form-ic-cmp">
							<i class="notika-icon notika-email"></i>
						</div>
						<div class="nk-int-st">
							<input type="email" class="form-control" placeholder="Email *"  id="email" name="email"  required value="">
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="form-group ic-cmp-int float-lb floating-lb">
						<div class="form-ic-cmp">
							<i class="notika-icon notika-edit"></i>
						</div>
						<div class="nk-int-st">
							<textarea class="form-control" placeholder="Mensagem *"  id="mensagem" name="mensagem"  required value=""> </textarea>
						</div>
					</div>
				</div>
			</div>
		</div><br>
		<button class="btn btn-success btn-lg notika-btn-primary" type="submit">Enviar</button>
	</div>
</form>

<?php require_once("partials/_footer.php") ?>