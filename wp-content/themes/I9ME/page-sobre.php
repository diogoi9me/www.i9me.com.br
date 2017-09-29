<?php get_template_part('templates/html','header');?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-resume');
	$resumoPage = $resumoPage[0];
	$slug_current = basename(get_permalink());
?>
<?php 

if ( has_post_thumbnail() ) {
			
			//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'full';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

			$bg_banner_single = 'style="background:url(' . $urlThumbnail . '); background-size: cover;"';

			} else {
						$urlThumbnail	= '';
						$bg_banner_single = '';
			}

?>
<article class="page-servico">
	<div class="banner-single" <?php echo $bg_banner_single; ?>>
		<header class="banner-single__header">
			<h2 class="banner-single__title"><?php the_title() ?></h2>
			<p class="banner-single__subtitle"><?php echo $resumoPage; ?></p>
		</header>
	</div>

	<section class="quem-somos">
		<div class="container">
		</div>
	</section>

	<section class="o-que-fazemos">
		<div class="container">
		</div>
	</section>

	<section class="clientes" id="clientes">
	<div class="container">		
		<header class="headertitle">
			<div class="headertitle__border">
				<h2 class="headertitle__title">
					Clientes
				</h2>
			</div>
			<!-- <p class="headertitle__subtitle">
				Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.
			</p> -->
		</header>
				<div class="clientes__carousel" id="clientes">
					<?php get_template_part('templates/clientes','loop');?>
				</div>
		
	</div>
</section>

<section class="depoimentos" id="depoimento">
	<div class="container">		
		<header class="headertitle">
			<div class="headertitle__border">
				<h2 class="headertitle__title">
					Depoimentos
				</h2>
			</div>
			<p class="headertitle__subtitle">
				Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.
			</p>
		</header>
				<div class="owl-carousel depoimentos__carousel" id="depoimentos">
					<?php get_template_part('templates/depoimento','loop');?>
				</div>
		
	</div>
</section>


</article>
<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>

