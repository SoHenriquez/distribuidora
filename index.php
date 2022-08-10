<?php include 'partes/head.php'; ?>
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
		<a class="btn btn-outline-secondary mb-3" onClick="muestra_oculta('contenido')">CATALOGO</a>
		<div class="mb-5" id="contenido" >
			<h2><a class="text-dark" href="#">Catálogo</a></h2> <br> <?php include 'productos.php';?>
		</div>
        <div id="load-products"></div> <!-- products will be load here -->
    
    </div>
<?php include 'partes/footer.php';?>