<?php 

$term_design = get_term_by('name', 'design', 'tipo-de-servico');
$term_web = get_term_by('name', 'web', 'tipo-de-servico');

	if( is_home() || is_front_page() ) {
		$limit_res = '4';
	} else {
		$limit_res = '8';
	}
 ?>
<div id="design" class="servicos__design">
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

					<p class="headertitle__subtitle headertitle__subtitle--2">
					<?php 
						echo $term_design->description;
					 ?>
					</p>
				</header>
				<div class="servicos__sombralapis"></div>
				<div class="servicos__lapisparallax">
				</div>

			</div>

			<div class="servicos__boxright">
				<ul class="servicos__lista">
					<?php
						$tax_slug =  'tipo-de-servico';
            			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'design',),), );
					 ?>
					<?php $loop = new WP_Query( $args );
          				while ( $loop->have_posts() ) : $loop->the_post();
          					
          					//Variaveis do Pst
          					$slug = basename(get_permalink());
          					$resumo = get_post_custom_values('wpcf-resume');
            				$resumo = $resumo[0];

            				$icone = get_post_custom_values('wpcf-icone');
							$icone = $icone[0];

							$icone_hover = get_post_custom_values('wpcf-icone-hover');
							$icone_hover = $icone_hover[0];

          			 ?>	
					<li class="servicos__item">
						<figure>
							<a href="<?php echo get_permalink(); ?>">
								<div class="servicos__bordas">
										<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
										<i class="servicos__<?php echo $slug; ?>">
											<img src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
										</i>
								</div>
							</a>							
							<figcaption>
								<h5 class="servicos__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
								<p class="servicos__smallcontent"><?php echo $resumo; ?></p>
							</figcaption>
						</figure>						
					</li>
					 <?php endwhile; ?> 
				</ul>
				<?php if( is_home() || is_front_page() ): ?>
					<div class="groupboxes__vermais groupboxes__vermais--servicos">
						<a href="<?php echo home_url(); ?>/servicos/#design" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
					</div>
				<?php endif; ?>
			</div>
		
		
	</div>
	 <div id="web" class="servicos__web">
		
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
						$tax_slug =  'tipo-de-servico';
            			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'web',),), );
					 ?>
					<?php $loop = new WP_Query( $args );
          				while ( $loop->have_posts() ) : $loop->the_post();
          					
          					//Variaveis do Pst
          					$slug = basename(get_permalink());
          					$resumo = get_post_custom_values('wpcf-resume');
            				$resumo = $resumo[0];

            				$icone = get_post_custom_values('wpcf-icone');
							$icone = $icone[0];

							$icone_hover = get_post_custom_values('wpcf-icone-hover');
							$icone_hover = $icone_hover[0];
          			 ?>	
					<li class="servicos__item">
						<figure>
							<a href="<?php echo get_permalink(); ?>">
								<div class="servicos__bordas">
										<i class="servicos__<?php echo $slug; ?>">
											<img src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
										</i>
								</div>
							</a>							
							<figcaption>
								<h5 class="servicos__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
								<p class="servicos__smallcontent"><?php echo $resumo; ?></p>
							</figcaption>
						</figure>						
					</li>
					<?php endwhile; ?>
				</ul>
				<?php if( is_home() || is_front_page() ): ?>
					<div class="groupboxes__vermais groupboxes__vermais--servicos">
						<a href="<?php echo home_url(); ?>/servicos/#web" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
					</div>
				<?php endif; ?>


			</div>
			
			<div class="servicos__boxright-web">
				<header class="headertitle headertitle--2 headertitle--3">
					<p class="headertitle__subtitle headertitle__subtitle--2 headertitle__subtitle--left">
						<?php 
							echo $term_web->description;
					 	?>
					</p>
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
