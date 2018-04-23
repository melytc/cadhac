<?php include 'header.php'; ?>

<div class="news container">
	<div class="smaller-container" style="width: 95%">
		<div class="row">
			<div class="col-lg-8 entry pr-5">
				<div class="top">
					<h1 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis qui consectetur quas tenetur nostrum mollitia?</h1>
					<p class="date">26 de marzo de 2018.</p>
				</div>
				<img src="img/news-entry.jpg" alt="Title of the entry">
				<div class="body">
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi iusto consequatur, vero iste nam, quam maxime animi iure optio fugit dolore sapiente eius placeat ea deserunt ipsa molestias quas totam? Accusamus eius aspernatur repudiandae cupiditate, dolores delectus incidunt ratione quis dicta sit dolorem excepturi voluptatem fugiat. Aliquid, ea perspiciatis. Fugiat nobis iste quos id quae quo, facilis necessitatibus sit distinctio cumque alias! Corporis facere enim alias, aut ab vel est iste illo minima eos minus laborum eaque quibusdam quis quam saepe. Quasi sequi deserunt qui unde aperiam harum autem id voluptate quidem maxime, aut a corporis eligendi quos nostrum magni, libero nesciunt tempora, officia iste totam sit ullam explicabo at! Mollitia alias in blanditiis assumenda? Excepturi architecto eveniet sit minima libero sequi quam dignissimos consequuntur soluta dolore nihil nemo ea, officiis tenetur, aliquid labore. Quas, mollitia. Deserunt totam debitis impedit dicta quo eos vitae perferendis porro et placeat! Veritatis, expedita!</p>
		
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui, consequuntur deleniti rerum illo incidunt, blanditiis unde obcaecati doloremque ab dolore quam corrupti porro dolores. Iusto blanditiis commodi quibusdam, debitis architecto ratione aperiam doloribus! Minima molestiae delectus, dignissimos ipsam dolores dolorem. Dignissimos alias vel recusandae ipsa ut impedit, aperiam corporis voluptatum ducimus, veniam, eligendi veritatis est! Provident, dolore inventore! Iste quas totam tempora odit temporibus vel autem molestias vitae magnam. Cumque aliquid dolores delectus veritatis id non explicabo perspiciatis quisquam obcaecati, deserunt aliquam. Corrupti itaque perferendis assumenda nesciunt sit placeat a veritatis maiores illum ut hic tempore, sapiente ipsa. Ut?</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptas eius placeat, voluptatibus cupiditate perspiciatis magni illum fuga eaque. Non laudantium sed maxime itaque! Dicta iste distinctio rerum odit minima autem alias voluptatibus, quibusdam magnam quae architecto molestiae voluptatem delectus excepturi placeat eos, velit magni! Cumque incidunt obcaecati hic esse quidem suscipit modi asperiores aliquid qui ab? Blanditiis molestias assumenda voluptate officiis magnam earum minima laboriosam id fugit, eaque eveniet deserunt sapiente asperiores distinctio rem.</p>
				</div>
			</div>
			<div class="col-lg-4 more-news mt-5 mt-lg-0">
				<div class="similar">
					<h5>M&aacute;s sobre</h5>
					<?php for($i = 0; $i < 3; $i++): ?>
						<div class="row align-items-center news-preview">
							<div class="col-sm-5" >
								<a href="#"><img src="img/news-preview.jpg" alt="" class="preview"></a>
							</div>
							<div class="col-sm-7">
								<a href="#" class="date">28 de marzo de 2018.</a><br>
								<a href="#" class="title">CADHAC celebra 25 años</a>
							</div>
						</div>
					<?php endfor; ?>
				</div>
				<section class="popular-content mt-5">
					<nav class="mb-4">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lo m&aacute;s visto</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Lo m&aacute;s compartido</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<?php for($i = 0; $i < 5; $i++): ?>
								<div class="row align-items-center news-preview">
									<div class="col-sm-5" >
										<a href="#"><img src="img/news-preview.jpg" alt="" class="preview"></a>
									</div>
									<div class="col-sm-7">
										<a href="#" class="date">28 de marzo de 2018.</a><br>
										<a href="#" class="title">CADHAC celebra 25 años</a>
									</div>
								</div>
							<?php endfor; ?>
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							<?php for($i = 0; $i < 2; $i++): ?>
								<div class="row news-preview">
									<div class="col-sm-5" >
										<a href="#"><img src="img/news-preview.jpg" alt="" class="preview"></a>
									</div>
									<div class="col-sm-7">
										<a href="#" class="date">28 de marzo de 2018.</a>
										<a href="#" class="title">CADHAC celebra 25 años</a>
									</div>
								</div>
							<?php endfor; ?>
							
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>