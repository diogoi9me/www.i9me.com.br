<section class="blog" id="blogs">
	<div class="container">
		<header class="headertitle">
			<div class="headertitle__border">
				<h2 class="headertitle__title">
					Blog
				</h2>
			</div>
			<p class="headertitle__subtitle">Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.</p>
		</header>
		<?php get_template_part('templates/blog','loop');?>
		<div class="groupboxes__vermais">
			<a href="<?php echo home_url(); ?>/blog/" class="borderradius"><i class="fa fa-plus" aria-hidden="true"></i></a>
		</div>
	</div>
</section>