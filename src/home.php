<?php include 'header.php' ?>
<div class="content home">
	<section class="banner img-bg bg-black-alpha" data-bg="img/pexels.jpg">
		<div class="container">
			<h1>BANNER GOES HERE</h1>
		</div>
	</section>
	<section class="one">
		<div class="container">
			<h2 class="title tac">En CADHAC, transformamos vidas</h2>
			<div class="smaller-container secondary">
				<div class="row">
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/tmpicon.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Justicia Social</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/tmpicon.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Atenci&oacute;n a familiares</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/tmpicon.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">B&uacute;squeda de personas</a>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/tmpicon.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Justicia Social</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/tmpicon.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Atenci&oacute;n a familiares</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/tmpicon.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">B&uacute;squeda de personas</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="two noticias d-none">
		<h2 class="tac">Noticias</h2>
		<div class="container newsgrid">
			<?php for($i = 0; $i < 2; $i++): ?>
			<div class="row">
				<div class="col-md-6">
					<article class="nota">
						<figure class="article-img">
							<a href="#"><img class="img-fluid" src="img/pexels.jpg" alt="Titulo de la nota"></a>
						</figure>
						<figcaption>
							<h3 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quos quasi placeat fugit doloribus voluptates.</a></h3>
							<a href="#" class="date">15 de enero de 2018</a>
						</figcaption>
					</article>
				</div>
				<div class="col-md-3">
					<article class="nota">
						<figure class="article-img">
							<a href="#"><img class="img-fluid" src="img/news-entry.jpg" alt="Titulo de la nota"></a>
						</figure>
						<figcaption>
							<h3 class="title"><a href="#">Participaci&oacute;n en seminario de desaparici&oacute;n</a></h3>
							<a href="#" class="date">15 de enero de 2018</a>
						</figcaption>
					</article>
				</div>
				<div class="col-md-3">
					<article class="nota">
						<figure class="article-img">
							<a href="#"><img class="img-fluid" src="img/news-entry.jpg" alt="Titulo de la nota"></a>
						</figure>
						<figcaption>
							<h3 class="title"><a href="#">Participaci&oacute;n en seminario de desaparici&oacute;n</a></h3>
							<a href="#" class="date">15 de enero de 2018</a>
						</figcaption>
					</article>
				</div>
			</div>
			<?php endfor; ?>
		</div>
	</section>
</div>
<?php include 'footer.php' ?>
