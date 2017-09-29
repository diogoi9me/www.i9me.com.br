<?php 
	$page = get_page_by_path('portfolios');
	$resumoSection = get_post_custom_values('wpcf-resume', $page->ID);
	$resumoSection = $resumoSection[0];
 ?>
<section class="projetos" id="portifolio">
	<div class="container">
		

			<header class="headertitle">
				<div class="headertitle__border">
					<h2 class="headertitle__title">
						PORTFÓLIO
					</h2>
				</div>
				<p class="headertitle__subtitle">
					<?php 
						echo $resumoSection;
					 ?>	 	
				</p>
			</header>
			
				<div class="containerowl groupboxes" >
					<?php get_template_part('templates/portfolio','loop');?>
				</div>

				<div class="groupboxes__vermais">
					<a href="<?php echo home_url() ?>/portfolios/" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
				</div>

	</div>
</section>