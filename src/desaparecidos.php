<?php include 'header.php'; ?>
<div class="content desaparecidos">
	<section class="banner bg-black-alpha img-bg" data-bg="img/pexels.jpg">
		<div class="container">
			<h1 class="white">Desaparecidos</h1>
			<p class="subtitle white">&iquest;D&oacute;nde est&aacute;n?</p>
		</div>
	</section>
	<div class="container">
		<div class="container-w90p main">
			<div class="row">
				<div class="col-md-3">
					<aside class="filters">
						<a href="#" class="btn download-data">Descarga los datos</a>
						<section class="filter year">
							<div class="form-group">
								<p class="label" for="year">A&ntilde;o de desaparici&oacute;n</p>
								<select class="form-control" name="year" id="year">
									<option selected value="">2018</option>
									<option value="">2017</option>
									<option value="">2016</option>
									<option value="">2015</option>
									<option value="">2014</option>
									<option value="">2013</option>
									<option value="">2012</option>
								</select>
							</div>
						</section>
						<section class="filter lugar">
							<div class="form-group">
								<p class="label">Lugar de desaparici&oacute;n</p>
								<?php 
									$arr = ["Todos", "Nuevo Le&oacute;n", "Contry","Guadalupe", "Monterrey", "San Nicol&aacute;s", "Tamaulipas"]; 
									foreach ($arr as $key => $entry):
								?>
									<div class="form-check">
										<input type="checkbox" <?= $key == 0 ? 'checked' : '' ?> name="opt<?= ($key+1) ?>" id="opt<?= $key+1 ?>" class="form-check-input">
										<label for="opt<?= $key+1 ?>" class="form-check-label"><?= $entry ?></label>
									</div>
								<?php endforeach; ?>

							</div>
						</section>
						<section class="filter age">
							<p class="label">Edad a la fecha de desaparici&oacute;n</p>
							<form name="myform" oninput="range1value.value = range1.valueAsNumber; range2value.value = range2.valueAsNumber">
								<div class="row">
									<div class="col-3">
										<label for="formControlRange">De:</label>
										<output name="range1value" for="range1">10</output>
									</div>
									<div class="col-8">
										<input name="range1" class="form-control-range" id="formControlRange" type="range" step="1" min="10" max="90" value="10">
									</div>
								</div>
								
								<div class="row">
									<div class="col-3">
										<label for="formControlRange">A:</label>
										<output name="range2value" for="range2">90</output>
									</div>
									<div class="col-8">
										<input name="range2" class="form-control-range" id="formControlRange" type="range" step="1" min="10" max="90" value="90">
									</div>
								</div>
							</form>
						</section>
						<section class="filter gender">
							<div class="form-group">
								<p class="label">G&eacute;nero del desaparecido</p>
								<div class="form-check">
									<input type="checkbox" name="gender" id="male" class="form-check-input" checked>
									<label for="male" class="form-check-label">Hombre</label>
								</div>
								<div class="form-check">
									<input type="checkbox" name="gender" id="female" class="form-check-input" checked>
									<label for="female" class="form-check-label">Mujer</label>
								</div>
							</div>
						</section>
					</aside>
				</div>
				<div class="col-md-9 pl-0 pl-md-5">
					<form action="#" class="search-alpha-form">
						<input type="text" name="q" id="q" placeholder="Buscar">
						<i class="fa fa-search">
							<svg id="i-search" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#bbb" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
								<circle cx="14" cy="14" r="12" />
								<path d="M23 23 L30 30"  />
							</svg>
						</i>
					</form>
			
					<div class="desaparecidos-wrap">
						<?php for ($i=0; $i < 3; $i++): ?>
							<div class="row">
								<div class="col-sm-3 person tac">
									<div class="collapsible">
										<div class="round-img">
											<button href="#"><img src="img/pexels.jpg" alt="" class="profile"></button>
											<div class="overlay">
												<svg id="i-plus" viewBox="0 0 32 32" width="32" height="32" fill="#ffffff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"> <path fill="#ffffff" d="M16 2 L16 30 M2 16 L30 16" /> </svg>
											</div>
										</div>
										<a href="#" class="name">H&eacute;ctor Rinc&oacute;n</a>
									</div>
									<div class="description">
										<img src="img/pexels.jpg" alt="" class="description">
										<p>Nombre: H&eacute;ctor Rinc&oacute;n</p>
										<p>Fecha de desaparici&oacute;n: 1 de enero de 2018</p>
										<p>Lugar de desaparici&oacute;n: Monterrey</p>
										<p>Apariencia f&iacute;sica: 1.70m, cabellos negro, ojos caf&acute;s.</p>
										<button>Ver imagen</button>
										<button>Contactar a CADHAC</button>
									</div>
								</div>

								<div class="col-sm-3 person tac">
									<div class="round-img">
										<button href="#"><img src="img/pexels.jpg" alt="" class="profile collapsible"></button>
										<div class="overlay">
											<svg id="i-plus" viewBox="0 0 32 32" width="32" height="32" fill="#ffffff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"> <path fill="#ffffff" d="M16 2 L16 30 M2 16 L30 16" /> </svg>
										</div>
									</div>
									<a href="#" class="name">H&eacute;ctor Rinc&oacute;n</a>
									<div class="description">
										<img src="img/pexels.jpg" alt="" class="description">
										<p>Nombre: H&eacute;ctor Rinc&oacute;n</p>
										<p>Fecha de desaparici&oacute;n: 1 de enero de 2018</p>
										<p>Lugar de desaparici&oacute;n: Monterrey</p>
										<p>Apariencia f&iacute;sica: 1.70m, cabellos negro, ojos caf&acute;s.</p>
										<button>Ver imagen</button>
										<button>Contactar a CADHAC</button>
									</div>
								</div>

								<div class="col-sm-3 person tac">
									<div class="round-img">
										<button href="#"><img src="img/pexels.jpg" alt="" class="profile collapsible"></button>
										<div class="overlay">
											<svg id="i-plus" viewBox="0 0 32 32" width="32" height="32" fill="#ffffff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"> <path fill="#ffffff" d="M16 2 L16 30 M2 16 L30 16" /> </svg>
										</div>
									</div>
									<a href="#" class="name">H&eacute;ctor Rinc&oacute;n</a>
									<div class="description">
										<img src="img/pexels.jpg" alt="" class="description">
										<p>Nombre: H&eacute;ctor Rinc&oacute;n</p>
										<p>Fecha de desaparici&oacute;n: 1 de enero de 2018</p>
										<p>Lugar de desaparici&oacute;n: Monterrey</p>
										<p>Apariencia f&iacute;sica: 1.70m, cabellos negro, ojos caf&acute;s.</p>
										<button>Ver imagen</button>
										<button>Contactar a CADHAC</button>
									</div>
								</div>

								<div class="col-sm-3 person tac">
									<div class="round-img">
										<button href="#"><img src="img/pexels.jpg" alt="" class="profile collapsible"></button>
										<div class="overlay">
											<svg id="i-plus" viewBox="0 0 32 32" width="32" height="32" fill="#ffffff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"> <path fill="#ffffff" d="M16 2 L16 30 M2 16 L30 16" /> </svg>
										</div>
									</div>
									<a href="#" class="name">H&eacute;ctor Rinc&oacute;n</a>
									<div class="description">
										<img src="img/pexels.jpg" alt="" class="description">
										<p>Nombre: H&eacute;ctor Rinc&oacute;n</p>
										<p>Fecha de desaparici&oacute;n: 1 de enero de 2018</p>
										<p>Lugar de desaparici&oacute;n: Monterrey</p>
										<p>Apariencia f&iacute;sica: 1.70m, cabellos negro, ojos caf&acute;s.</p>
										<button>Ver imagen</button>
										<button>Contactar a CADHAC</button>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var description = this.nextElementSibling;
			if (description.style.display === "block") {
				description.style.display = "none";
			} else {
				description.style.display = "block";
			}
		});
	}
</script>
<?php include 'footer.php'; ?>