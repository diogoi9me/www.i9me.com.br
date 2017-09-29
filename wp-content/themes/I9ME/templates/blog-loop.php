	<?php 

	if( is_home() || is_front_page() ) {
		
		$limit_res = '2';
	
	} else {

		$limit_res = '12';

	}

	$args = array( 'post_type' => 'post', 'posts_per_page' => $limit_res, 'orderby' => 'date', 'order' => 'ASC' );

 ?>

<ul class="groupboxes">
	<?php $loop = new WP_Query( $args );
		
		$contador = 1; //Iniciado em um para exibir um na primeira iteração

		while ( $loop->have_posts() ) : $loop->the_post();
			
			//Variaveis do Post
			$resumo = get_the_excerpt();

			if ( has_post_thumbnail() ) {
			
			//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'medium';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

			} else {
						$urlThumbnail	= '';
			}

    ?>	
     <li class="groupboxes__boxitem">
		<figure class="groupboxes__hover">
			<img src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>">
				<figcaption class="groupboxes__legend">
					<div class="groupboxes__border <?php if( $contador % 2 == 0 ) { echo 'groupboxes__border--right'; } ?>">
								<h5 class="groupboxes__title"><?php echo get_the_title(); ?></h5>
								<span class="groupboxes__subtitle"><?php echo get_the_excerpt(); ?></span>
							</div>
				</figcaption>

		</figure>
	</li>
	<?php $contador += 1; //Incrementa o contador para a próxima iteração do loop ?>
    <?php endwhile; ?>