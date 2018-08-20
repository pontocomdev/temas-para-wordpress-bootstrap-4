<?php
//Inclusão do Arquivo par aMenu responsivo
require_once get_template_directory(). '/inc/wp-bootstrap-navwalker.php';

// Carregamento de Css e JS

function load_scripts(){
	wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'4.1.3',true);

	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'4.1.3','all');
	wp_enqueue_style('font','https://use.fontawesome.com/releases/v5.2.0/css/all.css',array(),'5.2.0','all');
	wp_enqueue_style('estilo',get_template_directory_uri().'/assets/css/estilo.css',array(),'1.0','all');
}

add_action('wp_enqueue_scripts','load_scripts');

// Registro de Menus
register_nav_menus(
	array(
		'main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu'

	)
);

//Habilitar Imagens de Destaque
add_theme_support('post-thumbnails');

//Resgistro de Sidebars e Widgets
function curso_sidebars(){
	register_sidebar(
		array(
			'name'          => ('Endereço Rodapé'),
			'id'            => 'footer-address',
			'description'   => ('Adicione suas Informações de Endereço'),
			'before_widget' => '<div class="text-light">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="text-light"><i class="fas fa-envelope fa-2x mr-2 text-light"></i>',
			'after_title'   => '</h5>'
		)
	);

	register_sidebar(
		array(
			'name'          => ('Pensamento'),
			'id'            => 'footer-think',
			'description'   => ('Adicione seus pensamentos'),
			'before_widget' => '<div class="card-body text-light">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="text-light"><i class="fab fa-pagelines fa-2x mr-2 text-light"></i>',
			'after_title'   => '</h5>'
		)
	);

	register_sidebar(
		array(
			'name'          => ('Barra Lateral'),
			'id'            => 'sidebar-right',
			'description'   => ('Edicione Widgets na Barra Lateral.'),
			'before_widget' => '<div class="card my-3">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="card-header">',
			'after_title'   => '</div><div class="card-body card-list">'
		)
	);
}

add_action('widgets_init', 'curso_sidebars');