<?php


/*
=================================
Include Scripts
=================================
*/	

function inlieu_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/inlieu.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/inlieu.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'inlieu_script_enqueue');

/*
=================================
Activate Menus
=================================
*/


function inlieu_theme_setup() {
	
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

	
}

add_action('init', 'inlieu_theme_setup');

/*
=================================
Theme Support function
=================================
*/


add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
=================================
Sidebar Functions
=================================
*/


function inlieu_widget_setup() {

	register_sidebar(
		array(
			'name'  => 'Sidebar',
			'id'    => 'sidebar-1',
			'class' => 'custom-class',
			'description'   => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widgettitle">',
			'after_title'   => '</h1>' 
		)
	);
}

add_action('widgets_init', 'inlieu_widget_setup');


