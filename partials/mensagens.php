<!-- mensagens de sucesso e erro REMOÇÃO E CADASTRO -->
	<?php if (isset($_SESSION["success"])) { ?>
		<div class="alert-list">
			<div class="alert alert-success alert-dismissible" role="alert">
	         	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?=$_SESSION["success"]?>
	        </div>
		</div>
	<?php 
        unset($_SESSION["success"]);
		} ?>

		<?php if (isset($_SESSION["danger"])) { ?>
			<div class="alert-list">
				<div class="alert alert-danger alert-dismissible" role="alert">
		         	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?=$_SESSION["danger"]?>
		        </div>
			</div>
	<?php 
        unset($_SESSION["danger"]);
		} 
	?>
<!-- fim das mensagens -->