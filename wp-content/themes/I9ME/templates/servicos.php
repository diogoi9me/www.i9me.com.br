
<?php 
$page = get_page_by_path('servicos');
$resumoSection = get_post_custom_values('wpcf-resume', $page->ID);
$resumoSection = $resumoSection[0];
 ?>
<section class="servicos">
	<div class="servicos__layertop servicos__layertop--interna">
		<div class="container">

			<header class="headertitle">
				<div class="headertitle__border headertitle__border--white headertitle__border--white-home">
					<h2 class="headertitle__title headertitle__title--white">
						<?php 
							echo get_the_title( $page );
						 ?>
					</h2>
				</div>
				<p class="headertitle__subtitle headertitle__subtitle--white">
					<?php 
						echo $resumoSection;
					 ?>
				</p>
			</header>


		</div>
	</div>
	
	<?php get_template_part('templates/servico','loop');?>
	
	</div> 
</section>

<?php wp_reset_postdata(); ?>