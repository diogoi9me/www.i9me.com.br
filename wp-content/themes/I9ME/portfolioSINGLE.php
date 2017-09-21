<?php /* Template Name: PORTFOLIO SINGLE */?>
<?php get_template_part('templates/html','header');?>
<article class="page-portifolio">
	<div class="banner-single">
		<header class="banner-single__header">
			<h2 class="banner-single__title">Rama Jóias</h2>
			<p class="banner-single__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</header>	
	</div>

	<section class="page-portifolio__blocos">
		<div class="page-portifolio__bloco-left">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/box-left.png">
			<div class="page-portifolio__info">
				<div class="page-portifolio__info-left">
					<h4>O Briefing</h4>
					<p>	
						<strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco
					</p>
				</div>	
			</div>
		</div>
		<div class="page-portifolio__bloco-right">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/box-right.png">
			<div class="page-portifolio__info">
				<div class="page-portifolio__info-right">
					<h4>O Plano</h4>
					<p>	
						<strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco
					</p>
				</div>	
			</div>
		</div>
	</section>

	<section class="page-portifolio__websites">
		<div class="container">
			<header class="page-portifolio__header">
				<h2 class="page-portifolio__header-title">Website</h2>
				<p  class="page-portifolio__header-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="page-portifolio__header-btn">
					<a href="#">Conheça o Website</a>
				</div>
			</header>
		</div>
		<div class="page-portifolio__area-img">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/websites.png">
		</div>
	</section>

	<section class="page-portifolio__mobile">
		<div class="container">
			<header class="page-portifolio__header">
				<h2 class="page-portifolio__header-title">Mobile</h2>
				<p  class="page-portifolio__header-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<!-- <div class="page-portifolio__header-btn">
					<a href="#">Conheça o Website</a>
				</div> -->
			</header>
		</div>
		<div class="page-portifolio__area-img">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/websites.png">
		</div>
	</section>

	<section class="page-portifolio__seo">
		<div class="container">
			<div class="page-portifolio__box-info">
				<header class="page-portifolio__header">
				<h2 class="page-portifolio__header-title">Seo</h2>
				<p  class="page-portifolio__header-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</header>
			</div>
			<div class="page-portifolio__box-imagem">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/seo.png">
			</div>
		</div>
	</section>

	<section class="page-portifolio__outros-projetos">
		<div class="container">
			<header class="page-portifolio__header">
				<h2 class="page-portifolio__title">Outros Projetos</h2>
				<p class="page-portifolio__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</header>

			<div class="containerowl groupboxes" >
			    <div class="item">
					<li class="groupboxes__boxitem">
						<figure class="groupboxes__hover">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/pc.png" alt="">
								<figcaption class="groupboxes__legend">
									<div class="groupboxes__border">
										<h5 class="groupboxes__title">Dogma Store</h5>
										<span class="groupboxes__subtitle">Loja Virtual</span>
									</div>
								</figcaption>

						</figure>
					</li>
					<li class="groupboxes__boxitem">
						<figure class="groupboxes__hover">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/pc.png" alt="">
								<figcaption class="groupboxes__legend">
									<div class="groupboxes__border groupboxes__border--right">
										<h5 class="groupboxes__title">Dogma Store</h5>
										<span class="groupboxes__subtitle">Loja Virtual</span>
									</div>
								</figcaption>

						</figure>
					</li>
				</div>
			</div>
			<div class="groupboxes__vermais">
				<a href="#" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
			</div>
		</div>
	</section>
</article>

<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>