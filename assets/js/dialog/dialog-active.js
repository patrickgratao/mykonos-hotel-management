(function ($) {
 "use strict";
 
	/*----------------------
		Dialogs
	 -----------------------*/

	//Basic
	$('#sa-basic').on('click', function(){
		swal("Here's a message!");
	});

	//A title with a text under
	$('#sa-title').on('click', function(){
		swal("Here's a message!", "Lorem ipsum dolor cry sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, Spensaduran pellentesque maximus eniman. Mauriseleifend ex semper, lobortis purus.")
	});

	//Success Message
	$('#sa-success').on('click', function(){
		swal("Good job!", "Lorem ipsum dolor cry sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, Spensaduran pellentesque maximus eniman. Mauriseleifend ex semper, lobortis purus.", "success")
	});

	//Warning Message
	$('#sa-warning').on('click', function(){
		swal({   
			title: "Tem certeza disso?",   
			text: "Você não poderá recuperar os dados deste item após ser removido!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Sim, quero apagar!",
		}).then(function(){
			swal("Excluído!", "Você pediu e nós excluimos!", "success"); 
		});
	});


	//Excluir Hospede mensagem
	$('#hospede-delete').on('click', function(){
		swal({   
			title: "Tem certeza disso?",   
			text: "Você não poderá recuperar os dados deste hóspede após a remoção!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Sim, quero apagar!",
		}).then(function(){
			swal("Excluído!", "Você pediu e nós excluimos!", "success"); 
		});
	});

$('.deletar-categoria').on('click', function(){
		event.preventDefault();
		swal({   
			title: "Are you sure?",   
			text: "You will not be able to recover this imaginary file!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel plx!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				swal("Deleted!", "Your imaginary file has been deleted.", "success");   
				window.location.href = "remover.php?id=<?=$categoria['id']?>&recurso=categorias";
			} else {     
				swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	
	//Parameter
	$('#sa-params').on('click', function(){
		swal({   
			title: "Are you sure?",   
			text: "You will not be able to recover this imaginary file!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel plx!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				swal("Deleted!", "Your imaginary file has been deleted.", "success");   
			} else {     
				swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	//Custom Image
	$('#sa-image').on('click', function(){
		swal({   
			title: "Sweet!",   
			text: "Here's a custom image.",   
			imageUrl: "img/dialog/like.png" 
		});
	});

	//Auto Close Timer
	$('#sa-close').on('click', function(){
		 swal({   
			title: "Auto close alert!",   
			text: "I will close in 2 seconds.",   
			timer: 2000
		});
	});

 
})(jQuery); 