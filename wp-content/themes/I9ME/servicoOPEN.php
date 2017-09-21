<?php /* Template Name: SERVIÇO SINGLE */?>
<?php get_template_part('templates/html','header');?>
<article class="page-servico">
	<div class="banner-single">
		<header class="banner-single__header">
			<h2 class="banner-single__title">Logotipos</h2>
			<p class="banner-single__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</header>
	</div>

	<section class="criacao">
		<div class="criacao__lista-servicos">
			<ul class="criacao__lista">
				<li>
				 	<i class="criacao__logotipos"></i>
					<h5>Logotipos</h5>
				</li>
				<li>
					<i class="criacao__logotipos"></i>
					<h5>Papelaria</h5>
				</li>
				<li>
					<i class="criacao__logotipos"></i>
					<h5>Publicidade</h5>
				</li>
				<li>
					<i class="criacao__logotipos"></i>
					<h5>Ilustrações</h5>
				</li>
			</ul>
		</div>
		<div class="container">
			
			<div class="criacao__area-info">
				<div class="criacao__area-imagem">
					<figure>
						<img src="<?php echo get_template_directory_uri();?>/assets/images/servico.png">
					</figure>
					<figcaption>
						<h2>Criação ou redesenho<br/> de logotipos</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt<br/> ut labore et dolore magna aliqua.ipsum dolor sit amet, consectetur adipisicing elit, ipsum. </p>
					</figcaption>
				</div>
			</div>
		</div>
	</section>
<section class="criacao__paralax">
	<p>lorem ispum lorem ipsum</p>
</section>
<section class="criacao__fase">
	<div class="container">
		<div class="criacao__area-info">
			<div class="criacao__area-imagem criacao__area-imagem--fases">
				<figcaption>
					<h2>Fases de um<br/> projeto de logotipo</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt<br/> ut labore et dolore magna aliqua.ipsum dolor sit amet, consectetur adipisicing elit, ipsum. </p>
				</figcaption>
				<figure>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/servicoo.png">
				</figure>
			</div>
		</div>
	
	<div class="criacao__lista-fase">
		<div class="criacao__col">
			
			<figure class="criacao__img">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/fase1.png">
 				<div class="criacao__hover">
 					<img src="<?php echo get_template_directory_uri();?>/assets/images/icon-pesquisa.png">
 				</div>
 			</figure>
			
			<figcaption class="criacao__legenda">
				<h5>1.Pesquisa e Planejamento</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation.</p>
			</figcaption>
		</div>
		<div class="criacao__col criacao__col--right">
			<figure class="criacao__img criacao__img--right">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/fase2.png">
				<div class="criacao__hover">
 					<img src="<?php echo get_template_directory_uri();?>/assets/images/icon-criacao.png">
 				</div>
			</figure>
			<figcaption class="criacao__legenda criacao__legenda--left">
				<h5>2.Criação e Conceito</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation.</p>
			</figcaption>
			
		</div>
	</div>
	<div class="controls">
		<a href="#" class="controls__left"></a>
		<a href="#" class="controls__center"></a>
		<a href="#" class="controls__right"></a>
	</div>
	<div class="criacao__bottom-paralax">
		<div class="criacao__bottom-texto">
			<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt.</p>
		</div>
		<div class="criacao__bottom-lapis"></div>
	</div>
	</div>
</section>

</article>
<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>