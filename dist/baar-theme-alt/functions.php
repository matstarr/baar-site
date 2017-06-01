<?php

// Load Language files
load_theme_textdomain( 'baar-theme', get_template_directory() . '/languages/');

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'baar-theme' ),
	'footer' => __( 'Footer Menu', 'baar-theme' )
) );


?>
