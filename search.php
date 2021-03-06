	<?php get_header(); ?>
	
	<div class="container-fluid bg-general-header">
		<div class="container py-4">
			<header class="col-md-12">
				<h1 class="text-center text-light">
					Resultado da Pesquisa por: <?php echo get_search_query(); ?>
					<span class="underline"></span>
				</h1>
				<p class="text-light text-center"> 
					Sua busca em nosso site retornou os seguintes resultados...
				</p>
			</header>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
					//Possui posts?
					if(have_posts()):
						//Enquando houver posts, mostre
						while(have_posts()): the_post();
					// Todo o conteudo desta página
				?>
				<section class="card my-3">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<?php the_post_thumbnail('',array('class' => 'img-fluid pb-2')); ?>
							</div>
							<div class="col-md-8">
								<h2><?php the_title(); ?></h2>
								<p><?php the_excerpt(); ?></p>
								<div class="float-right">
									<a href="<?php the_permalink(); ?>" class="btn btn-link">Veja a Publicação</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php
						endwhile;
				?>
				<div class="row pag-link">
					<div class="text-left col-6"><?php previous_posts_link('<< Postagens Recentes'); ?></div>
					<div class="text-right col-6"><?php next_posts_link('Postagens Anteriores >>'); ?></div>
				</div>
				<?php
					endif;
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
	