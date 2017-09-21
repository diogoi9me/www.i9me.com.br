<?php /* Template Name: SERVIÇOS */?>
<?php get_template_part('templates/html','header');?>
<?php get_template_part('templates/video','topo'); ?>


<?php  while (have_posts()) : the_post();
$grupo_design  =  get_post_meta( get_the_ID(), 'grupo_design', true );
$grupo_web 	   =  get_post_meta( get_the_ID(), 'grupo_web', true );

?>
<section class="servicos servicos--interna">
	<!-- <div class="servicos__layertop servicos__layertop--interna">
		<div class="container">

			<header class="headertitle">
				<div class="headertitle__border headertitle__border--white">
					<h2 class="headertitle__title headertitle__title--white">
						Serviços
					</h2>
				</div>
				<p class="headertitle__subtitle headertitle__subtitle--white">Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.</p>
			</header>


		</div>
	</div> -->
	
	<!--<div class="servicos__img-paralax"></div>-->
	<div class="servicos__design">

			<div class="servicos__boxleft">


				<header class="headertitle headertitle--2">
					<div class="headertitle__border">
						<h2 class="headertitle__title headertitle__title--2">
							<div class="headertitle__group">
								<span class="headertitle__letter">D</span>
								<span class="headertitle__letter">e</span>
							</div>
							<div class="headertitle__group">
								<span class="headertitle__letter">s</span>
								<span class="headertitle__letter">i</span>
							</div>
							<div class="headertitle__group">
								<span class="headertitle__letter">g</span>
								<span class="headertitle__letter">n</span>
							</div>
                		</h2>
					</div>
					<p class="headertitle__subtitle headertitle__subtitle--2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.</p>
				</header>
				<div class="servicos__sombralapis"></div>
				<div class="servicos__lapisparallax">
				</div>
				<!--<div class="servicos__blocoparallax">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim recusandae doloremque et inventore minima quis ex accusamus distinctio quam placeat optio fugit sunt, qui, maiores excepturi debitis rerum tempora mollitia.
				</div>-->

			</div>

			<div class="servicos__boxright">
				<ul class="servicos__lista">
					<?php $i = 0; ?>
					<?php foreach ($grupo_design as $des) : ?>	
					<li class="servicos__item">
						<a href="#">
						<figure>
						<div class="servicos__bordas">
						<?php 
							$image_attributes = wp_get_attachment_image_src( $des["grupo_design_imagem"][0]);
								if( $image_attributes) : ?>
								<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />

						<?php endif; ?>
						</div>
							
							<figcaption>
								<h5 class="servicos__smalltitle"><?php echo $des["grupo_design_titulo"]; ?></h5>
								<p class="servicos__smallcontent"><?php echo $des["grupo_design_descricao"]; ?></p>
							</figcaption>
						</figure>
						</a>
					</li>
					<?php 
						if($i == 3){ break; }	
						$i++; endforeach;
					?>
					<!-- <li class="servicos__item">
						<a href="#">
						<figure>
							<i class="servicos__papelaria"></i>
							<figcaption>
								<h5 class="servicos__smalltitle">Papelaria</h5>
								<p class="servicos__smallcontent">lorem ipsum dolor sit amet</p>
							</figcaption>
						</figure>
						</a>
					</li>
					<li class="servicos__item">
						<a href="#">
						<figure>
							<i class="servicos__anuncios"></i>
							<figcaption>
								<h5 class="servicos__smalltitle">Publicidade</h5>
								<p class="servicos__smallcontent">lorem ipsum dolor sit amet</p>
							</figcaption>
						</figure>
						</a>
					</li>
					<li class="servicos__item">
						<a href="#">
						<figure>
							<i class="servicos__ilustracoes"></i>
							<figcaption>
								<h5 class="servicos__smalltitle">Ilustrações</h5>
								<p class="servicos__smallcontent">lorem ipsum dolor sit amet</p>
							</figcaption>
						</figure>
						</a>
					</li> -->
					<div class="groupboxes__vermais groupboxes__vermais--servicos">
					<a href="#" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
					</div>
				</ul>
			</div>
		
		
	</div>
	 <div class="servicos__web">
		
			<div class="servicos__boxleft-web">
				<header class="servicos__web-title headertitle headertitle--2 headertitle--3">
					<div class="headertitle__border headertitle__border--2 headertitle__border--3">
						<h2 class="headertitle__title headertitle__title--2">
							<div class="headertitle__group headertitle__group--2">
								<span class="headertitle__letter">Web</span>
							</div>
                		</h2>
					</div>
					
				</header>

				<ul class="servicos__lista2">
					<?php $j = 0; ?>
					<?php foreach ($grupo_web as $we) : ?>	
					<li class="servicos__item">
						<figure>
						<div class="servicos__bordas">
						<?php 
							$image_attributes = wp_get_attachment_image_src( $we["grupo_web_imagem"][0]);
								if( $image_attributes) : ?>
								<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />

						<?php endif; ?>
						</div>
							<figcaption>
								<h5 class="servicos__smalltitle"><?php echo $we["grupo_web_titulo"]; ?></h5>
								<p class="servicos__smallcontent"><?php echo $we["grupo_web_descricao"]; ?></p>
							</figcaption>
						</figure>
					</li>
					<?php 
						if($j == 3){ break; }	
						$j++; endforeach;
					?>
					<!-- <li class="servicos__item">
						<figure>
							<i class="servicos__ecommerce"></i>
							<figcaption>
								<h5 class="servicos__smalltitle">E-commerce</h5>
								<p class="servicos__smallcontent">lorem ipsum dolor sit amet</p>
							</figcaption>
						</figure>
					</li>
					<li class="servicos__item">
						<figure>
							<i class="servicos__campanhas"></i>
							<figcaption>
								<h5 class="servicos__smalltitle">Campanhas</h5>
								<p class="servicos__smallcontent">lorem ipsum dolor sit amet</p>
							</figcaption>
						</figure>
					</li>
					<li class="servicos__item">
						<figure>
							<i class="servicos__consultorias"></i>
							<figcaption>
								<h5 class="servicos__smalltitle">Consultorias</h5>
								<p class="servicos__smallcontent">lorem ipsum dolor sit amet</p>
							</figcaption>
						</figure>
					</li> -->


					<div class="groupboxes__vermais groupboxes__vermais--servicos">
					<a href="#" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
					</div>
				</ul>

			</div>
			
			<div class="servicos__boxright-web">
				<header class="headertitle headertitle--2 headertitle--3">
					<p class="headertitle__subtitle headertitle__subtitle--2 headertitle__subtitle--left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.</p>
					<div class="headertitle__border headertitle__border--2 headertitle__border--3">
						<h2 class="headertitle__title headertitle__title--2">
							<div class="headertitle__group headertitle__group--2">
								<span class="headertitle__letter">W</span>
								<span class="headertitle__letter">e</span>
								<span class="headertitle__letter">b</span>
							</div>
                		</h2>
					</div>
					
				</header>
				<div class="servicos__sombraphone "></div>
				<div class="servicos__phoneparallax ">
				</div>
			
			</div>



	
	</div> 
</section>

<?php endwhile; wp_reset_postdata(); ?>

<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>