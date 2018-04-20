<?php include 'header.php'; ?>
<div class="publicaciones content">
	<section class="banner img-bg bg-black-alpha">
		<div class="container">
			<h2>Informe de desaparici&oacute;n forzada en Nuevo Le&oacute;n 2018</h2>
			<a href="#" class="btn bg-purple2">Descarga el reporte</a>
		</div>
	</section>
	<div class="container">
		<div class="smaller-container">
			<h1>Publicaciones</h1>
			<div class="pubslist">
				<?php for($i = 0; $i < 4; $i++): ?>
				<article class="publication">
					<div class="row">
						<div class="col-md-3">
							<img src="img/temppub.jpg" alt="Titulo del documento">
						</div>
						<div class="col-md-9">
							<p class="date ttu">Septiembre 24, 2017</p>
							<h3 class="title">Desapariciones en Nuevo León desde la mirada de CADHAC: Informe 2009-2016</h3>
							<p class="extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum saepe, officia quam! Ea libero cum veniam, dignissimos quo, dolores sit laboriosam distinctio adipisci nobis omnis dolore sint similique ut perferendis asperiores illo optio eum earum amet sequi commodi maxime.</p>
							<a href="#" class="btn download-report btn-primary bg-lightgreen">Descargar reporte</a>
						</div>
					</div>
					<hr>
				</article>
				<?php endfor; ?>
			</div>
		</div>
	</div>	
</div>
<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">  -->
<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700" rel="stylesheet"> 
<!-- <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,600,700" rel="stylesheet">  -->
<?php include 'footer.php'; ?>
