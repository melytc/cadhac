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
							<input name="age" type="range" min="10" max="90" step="1"/>
							<input name="age" type="range" min="10" max="90" step="1"/>
						</section>
						<section class="filter gender">
							<div class="form-group">
								<p class="label">G&eacute;nero del desaparecido</p>
								<div class="form-check">
									<input type="checkbox" name="gender" id="male" class="form-check-input">
									<label for="male" class="form-check-label">Hombre</label>
								</div>
								<div class="form-check">
									<input type="checkbox" name="gender" id="female" class="form-check-input">
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
								<?php for($j = 0; $j < 4; $j++): ?>
									<div class="col-sm-3 person tac">
										<div class="round-img">
											<a href="#"><img src="img/pexels.jpg" alt="" class="profile"></a>

											<div class="overlay"><svg id="i-plus" viewBox="0 0 32 32" width="32" height="32" fill="#ffffff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"> <path fill="#ffffff" d="M16 2 L16 30 M2 16 L30 16" /> </svg></div>
										</div>
										<a href="#" class="name">H&eacute;ctor Rinc&oacute;n</a>
									</div>
								<?php endfor; ?>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>