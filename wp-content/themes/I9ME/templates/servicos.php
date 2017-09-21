<?php  while (have_posts()) : the_post();
$grupo_design  =  get_post_meta( get_the_ID(), 'grupo_design', true );
$grupo_web 	   =  get_post_meta( get_the_ID(), 'grupo_web', true );

?>
<section class="servicos">
	<div class="servicos__layertop servicos__layertop--interna">
		<div class="container">

			<header class="headertitle">
				<div class="headertitle__border headertitle__border--white headertitle__border--white-home">
					<h2 class="headertitle__title headertitle__title--white">
						Serviços
					</h2>
				</div>
				<p class="headertitle__subtitle headertitle__subtitle--white">Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.</p>
			</header>


		</div>
	</div>
	
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
					<?php 
						
						$args = array( 
							'post_type' => 'servico', 
							'posts_per_page' => 4, 
							'order' => 'ASC',  
							'tax_query' => array( array ( 
								'taxonomy' => 'tipo-de-servico', 
								'field' => 'slug', 
								'terms' => 'design')
								 ),  
							);

							$loop = new WP_Query( $args );

									while ( $loop->have_posts() ) : $loop->the_post();
  
									$slug = basename(get_permalink());
									$classItem = $slug;

									//Campos Personalizados
									$icone = get_post_custom_values('wpcf-icone');
									$icone = $icone[0];

	
					?>
					
					<li class="servicos__item">
						<a href="<?php echo get_the_permalink(); ?>">
						<figure>
						<div class="servicos__bordas">
						
								<img src="<?php echo $icone; ?>" alt="<?php echo get_the_title(); ?>" />

						</div>
							
							<figcaption>
								<h5 class="servicos__smalltitle"><?php echo get_the_title(); ?></h5>
								<p class="servicos__smallcontent"><?php the_excerpt(); ?></p>
							</figcaption>
						</figure>
						</a>
					</li>

					<?php endwhile; ?>

				
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
					<?php 
						$args = array( 
							'post_type' => 'servico', 
							'posts_per_page' => 4, 
							'order' => 'ASC',  
							'tax_query' => array( array ( 
								'taxonomy' => 'tipo-de-servico', 
								'field' => 'slug', 
								'terms' => 'web')
								 ),  
							);


							$loop = new WP_Query( $args );

									while ( $loop->have_posts() ) : $loop->the_post();
  
									$slug = basename(get_permalink());
									$classItem = $slug;

									//Campos Personalizados
									$icone = get_post_custom_values('wpcf-icone');
									$icone = $icone[0];

	
					?>
					<li class="servicos__item">
						<a href="<?php echo get_the_permalink(); ?>">
						<figure>
						<div class="servicos__bordas">
							<img src="<?php echo $icone; ?>" alt="<?php echo get_the_title(); ?>" />
						</div>
							<figcaption>
								<h5 class="servicos__smalltitle"><?php echo get_the_title(); ?></h5>
								<p class="servicos__smallcontent"><?php the_excerpt(); ?></p>
							</figcaption>
						</figure>
						</a>
					</li>
					
					<?php endwhile; ?>


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