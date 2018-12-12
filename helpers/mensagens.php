<?php 	
session_start();

function mostraAlerta($tipo) {

	if (isset($_SESSION[$tipo])) { ?>
		<div class="alert-list">
			<div class="alert alert-<?=$tipo?> alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?=$_SESSION[$tipo]?>
			</div>
		</div>

		<?php 
		unset($_SESSION[$tipo]);
	}
}