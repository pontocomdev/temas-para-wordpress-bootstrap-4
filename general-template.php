<?php
/*
Template Name: General Template
*/
?>
<?php get_header(); ?>
	
	<?php
		//Possui posts?
		if(have_posts()):
			//Enquando houver posts, mostre
			while(have_posts()): the_post();
		// Todo o conteudo desta página
	?>
	<div class="container-fluid bg-general-header">
		<div class="container py-4">
			<header class="col-md-12">
				<h1 class="text-center text-light">
					<?php the_title(); ?>
					<span class="underline"></span>
				</h1>
				<p class="text-light text-center"> 
					<?php
					$postid = get_the_ID();
					if(get_post_meta($postid, 'subtitulo', true)){
						echo get_post_meta($postid, 'subtitulo', true);
					}
					?>
				</p>
			</header>
		</div>
	</div>
	<div class="container">
		<div class="card my-3">
			<div class="card-body">
				<div class="py-3 px-3">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

	<?php
			endwhile;
		endif;
	?>

<?php get_footer(); ?>
