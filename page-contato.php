	<?php get_header(); ?>
	<div class="container-fluid bg-general-header">
		<div class="container py-4">
			<header class="col-md-12 header-config">
				<h1 class="text-center text-light">
					Fale Conosco
					<span class="underline"></span>
				</h1>
				<p>Envie sua dúvida, sugestão ou pedido que teremos o prazer em entrar em contato!</p>
			</header>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
					dynamic_sidebar('contact');
				?>
			</div>
			<div class="col-md-4">
				<?php
					dynamic_sidebar('sidebar-right');
				?>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
	