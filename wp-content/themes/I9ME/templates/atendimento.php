<section class="atendimento" id="atendimentos">
	<div class="container">
		<header class="headertitle">
			<div class="headertitle__border headertitle__border--white">
				<h2 class="headertitle__title headertitle__title--white">
					Atendimento
				</h2>
			</div>
			<p class="headertitle__subtitle headertitle__subtitle--white">Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.</p>
		</header>
		
		<div class="atendimento__boxform">
			<address class="atendimento__groupend">
				<div class="atendimento__contato">
					<i class="fa fa-envelope" aria-hidden="true"></i><span>contato@i9me.com.br</span>
				</div>
				<div class="atendimento__fone">
					<i class="fa fa-phone" aria-hidden="true"></i><span><strong>(85) 4042-08000</strong></span>
				</div>
				<div class="atendimento__endereco">
					<i class="fa fa-map-marker fa2" aria-hidden="true"></i><span>R. leda pereira, Nº 534,<br/> sala 05 A - Fortaleza-CE <br/> CEP: 60821-572</span>
				</div>
			</address>

			<div class="atendimento__form">
				<?php 
					echo do_shortcode('[contact-form-7 id="5" title="Atendimento"]' );
				?>
			</div>
		</div>






	</div>
</section>