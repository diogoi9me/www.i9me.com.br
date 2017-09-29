<?php 

	if( is_home() || is_front_page() ) {
		$limit_res = '4';
		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => $limit_res, 'orderby' => 'date', 'order' => 'ASC' );

	} elseif( is_single() && get_post_type() == 'cliente'  ) {

		$limit_res = '20';

		$post_id = get_the_ID();


		$args = array(
		'post_type' => 'portfolio',
		'numberposts' => $limit_res,
		//'meta_key' => 'wpcf-order',
		'orderby' => 'date',
		'order' => 'ASC',
		'meta_query' => array(array('key' => '_wpcf_belongs_cliente_id', 'value' => $post_id ))
		);

	} elseif( is_single() && get_post_type() == 'servico'  ) {

		$limit_res = '20';

		$post_id = get_the_ID();


		$args = array(
		'post_type' => 'portfolio',
		'numberposts' => $limit_res,
		//'meta_key' => 'wpcf-order',
		'orderby' => 'date',
		'order' => 'ASC',
		'meta_query' => array(array('key' => '_wpcf_belongs_servico_id', 'value' => $post_id ))
		);


	} else {

		$limit_res = '20';
		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => $limit_res, 'orderby' => 'date', 'order' => 'ASC' );

	}
 ?>

<ul class="item">
	
	<?php $loop = new WP_Query( $args );
		
		$contador = 1; //Iniciado em um para exibir um na primeira iteração

		while ( $loop->have_posts() ) : $loop->the_post();
			
			//Variaveis do Post
			$resumo = get_post_custom_values('wpcf-resume');
			$resumo = $resumo[0];

			$miniatura = get_post_custom_values('wpcf-miniatura');
    		$miniatura = $miniatura[0];

    ?>	


<?php 
// Get the ID of the parent post, which belongs to the "Writer" post type
$customer_id = wpcf_pr_post_get_belongs( get_the_ID(), 'cliente' );
// Get all the parent (writer) post data
$customer_post = get_post( $customer_id );


// Get the ID of the parent post, which belongs to the "Writer" post type
$service_id = wpcf_pr_post_get_belongs( get_the_ID(), 'servico' );
// Get all the parent (writer) post data
$service_post = get_post( $service_id );

?>



        <li class="groupboxes__boxitem">
        	<a href="<?php echo get_permalink(); ?>">
				<figure class="groupboxes__hover <?php if( $contador % 2 == 0 ) { echo 'color-b'; } ?>">
					<img src="<?php echo $miniatura; ?>" alt="<?php echo get_the_title(); ?>">
						<figcaption class="groupboxes__legend">
							<div class="groupboxes__border <?php if( $contador % 2 == 0 ) { echo 'groupboxes__border--right'; } ?>">
								<h5 class="groupboxes__title"><?php echo  $customer_post->post_title; ?></h5>
								<span class="groupboxes__subtitle"><?php echo $service_post->post_title; ?></span>
							</div>
						</figcaption>
				</figure>
			</a>
		</li>


		<?php $contador += 1; //Incrementa o contador para a próxima iteração do loop ?>

		<?php endwhile; ?> 

		<?php if( !is_home() && !is_front_page() ) { ?>
			 <div class="groupboxes__vermais">
				<a href="#more" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
			</div>
		<?php } ?>

			<!-- <li class="groupboxes__boxitem">
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
			</li> -->



	    	
	    </ul>

	   