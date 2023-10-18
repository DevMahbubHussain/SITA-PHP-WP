<?php 

function medi_plus_theme_support()
{

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );


	// menu support 
	register_nav_menus(array(
       'primary_menu' =>__('Primary Menu','mediplus'),
       'secondary_menu' =>__('Secondary Menu','mediplus'),
       'footer_menu' =>__('Footer Menu','mediplus'),
       'mobile_menu' =>__('Mobile Menu','mediplus')

	));
}


add_action('after_setup_theme','medi_plus_theme_support');




// load all css

require_once 'enquee/enquee.php';
require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
require_once 'admin/slider_cpt.php';





// metabox 


// load cmb2 metabox
require_once 'lib/CMB2/init.php';
require_once 'lib/medi_plus_metabox.php';


















