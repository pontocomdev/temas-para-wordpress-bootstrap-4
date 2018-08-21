	<?php get_header(); ?>
	<?php
					//Enquando houver posts, mostre
						while(have_posts()): the_post();
					// Todo o conteudo desta página
				?>
	<div class="container-fluid bg-general-header">
		<div class="container py-4">
			<header class="col-md-12 header-config">
				<h1 class="text-center text-light">
					<?php the_title(); ?>
					<span class="underline"></span>
				</h1>
				<?php the_excerpt() ?>
			</header>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
				<section class="card my-3">
					<div class="card-header text-muted">
							Publicado em: <?php echo get_the_date(); ?>
					</div>
					<div class="card-body">
						<div class="row py-3 px-3">
							<div class="col-md-8 mx-auto">
								<?php the_post_thumbnail('',array('class' => 'img-thumbnail')); ?>
							</div>
						</div>
						<?php the_content(); ?>
					</div>
				</section>
				<?php
						endwhile;
				?>
				<div class="row pag-link">
					<div class="text-left col-6"><?php next_post_link('&laquo; %link'); ?></div>
					<div class="text-right col-6"><?php previous_post_link('%link &raquo;'); ?></div>
				</div>
			</div>
			<div class="col-md-4">
				<?php
					dynamic_sidebar('sidebar-right');
				?>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
	