<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container-fluid bg-header">
			<div class="container">
				<?php
					if(is_active_sidebar('social-icons')){
						dynamic_sidebar('social-icons');
					}
				?>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a href="<?php echo home_url(); ?>" class="navbar-brand">
						<?php bloginfo('name'); ?>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
					aria-controls="menu" aria-expanded="false" aria-label="Menu Collapse">
						<span class="navbar-toggler-icon text-light"></span>
					</button>
					<?php
						wp_nav_menu(
							array(
							'theme_location'  => 'main_menu',
							'depth'           => 2,
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'mainMenu',
							'menu_class'      => 'nav navbar-nav ml-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker()
							)
						);
					?>
				</nav>
			</div>
		</div>
	</header>		
		
