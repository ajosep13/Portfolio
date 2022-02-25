<?php
function ammu_style(){
	wp_enqueue_script('SB-Forms-JS','//cdn.startbootstrap.com/sb-forms-latest.js',NULL,microtime(),true);
	wp_enqueue_script('Bootstrap-core-JS','//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js',NULL,microtime(),true);
	wp_enqueue_script('ammu-js',get_theme_file_uri('js/scripts.js'),NULL,microtime(), true);
	wp_enqueue_script('font-awesome','//use.fontawesome.com/releases/v5.15.3/js/all.js',NULL,microtime(),true);
	wp_enqueue_style('google-font1','//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
	wp_enqueue_style('google-font2','//fonts.googleapis.com/css?family=Montserrat:400,700');
	// wp_enqueue_style('font-awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.css');
	wp_enqueue_style('ammu_main_styles',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','ammu_style');
add_theme_support('post-thumbnails');
?>
