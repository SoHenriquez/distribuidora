<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax SweetAlert PHP & MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="assets/swal2/sweetalert2.min.css" type="text/css" />
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<header class="slideheader">
			<div class="row">
				<div class="col-4 uno">

				</div>
				<div class="col-4 dos">
					<h4 class="cabecera">Y TÚ, ¿TE QUEDARÁS EN LA TIERRA?</h4>
	
				</div>
				<div class="col-4 tres">

				</div>
			</div>
	</header>
    <div class="container">
    	
        <div class="page-header">
        <h1><a target="_blank" class="text-dark" href="http://www.baulphp.com/">LA PASTELERA</a></h1>
        </div>
        <!-- nav -->
		<?php include 'nav.php'; ?>
		<h2><a class="text-dark" href="#">Catálogo</a></h2>
		<div class="mb-5"><?php include 'productos.php';?></div>
        <div id="load-products"></div> <!-- products will be load here -->
    
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/swal2/sweetalert2.min.js"></script>


<script>
	$(document).ready(function(){
		
		readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delete_product', 
		function(e){
			var productId = $(this).data('id');
			SwalDelete(productId);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(productId){
		
		swal({
			title: 'Estas seguro?',
			text: "Se borrará de forma permanente!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, bórralo!',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
			  return new Promise(function(resolve) {
			       
			     $.ajax({
			   		url: 'eliminar.php',
			    	type: 'POST',
			       	data: 'delete='+productId,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Eliminado!', response.message, response.status);
					readProducts();
			     })
			     .fail(function(){
			     	swal('Oops...', 'Algo salió mal con ajax !', 'error');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	
		
	}
	
	function readProducts(){
		$('#load-products').load('panel.php');	
	}
	
</script>
<!-- boostrap5.2 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="../js/datos.js"></script>
</body>
</html>