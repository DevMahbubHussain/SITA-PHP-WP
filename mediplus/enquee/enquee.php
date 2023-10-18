<?php 

// loadd css assets
function medi_plus_css_enquee()
{
   wp_enqueue_style( 'medi_plus_google_fonts ', 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap', false );
   wp_enqueue_style('medi_plus_bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), '', '4.0.0', $media = 'all' );
    wp_enqueue_style('medi_plus_nice_select', get_theme_file_uri('assets/css/nice-select.css'), '', '1.0.0', $media = 'all' );
    wp_enqueue_style('medi_plus_font_awesome', get_theme_file_uri('assets/css/font-awesome.min.css'), '', '1.0.0', $media = 'all' );
     wp_enqueue_style('medi_plus_icofont', get_theme_file_uri('assets/css/icofont.css'), '', '1.0.0', $media = 'all' );
       wp_enqueue_style('medi_plus_slicknav', get_theme_file_uri('assets/css/slicknav.min.css'), '', '1.0.0', $media = 'all' );
        wp_enqueue_style('medi_plus_owl_carousel', get_theme_file_uri('assets/css/owl-carousel.css'), '', '1.0.0', $media = 'all' );
        wp_enqueue_style('medi_plus_datepicker', get_theme_file_uri('assets/css/datepicker.css'), '', '1.0.0', $media = 'all' );
          wp_enqueue_style('medi_plus_animate', get_theme_file_uri('assets/css/animate.min.css'), '', '1.0.0', $media = 'all' );
           wp_enqueue_style('medi_plus_magnific_popup', get_theme_file_uri('assets/css/magnific-popup.css'), '', '1.0.0', $media = 'all' );
             wp_enqueue_style('medi_plus_normalize', get_theme_file_uri('assets/css/normalize.css'), '', '1.0.0', $media = 'all' );
              wp_enqueue_style('medi_plus_style', get_theme_file_uri('assets/style.css'), '', '1.0.0', $media = 'all' );
       wp_enqueue_style('medi_plus_responsive', get_theme_file_uri('assets/css/responsive.css'), '', '1.0.0', $media = 'all' );

          wp_enqueue_style('medi_plus_responsive', get_theme_file_uri('assets/css/responsive.css'), '', '1.0.0', $media = 'all' );

}
add_action('wp_enqueue_scripts', 'medi_plus_css_enquee');



// load all js 


function medi_plus_js_enquee()
{
	wp_enqueue_script('medi_plus_query_ui_js', get_theme_file_uri('assets/js/jquery-ui.min.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_easing_js', get_theme_file_uri('assets/js/easing.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_colors_js', get_theme_file_uri('assets/js/colors.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_popper_js', get_theme_file_uri('assets/js/popper.min.js'), array('jquery'), '1.00', true);

	
	wp_enqueue_script('medi_plus_bootstrap_datepicker_js', get_theme_file_uri('assets/js/bootstrap-datepicker.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_jquery_nav_js', get_theme_file_uri('assets/js/jquery.nav.js'), array('jquery'), '1.00', true);
	wp_enqueue_script('medi_plus_slicknav_js', get_theme_file_uri('assets/js/slicknav.min.js'), array('jquery'), '1.00', true);
	wp_enqueue_script('medi_plus_scrollUp_js', get_theme_file_uri('assets/js/query.scrollUp.min.js'), array('jquery'), '1.00', true);
	wp_enqueue_script('medi_plus_niceselect_js', get_theme_file_uri('assets/js/niceselect.js'), array('jquery'), '1.00', true);
	wp_enqueue_script('medi_plus_tilt_jquery_js', get_theme_file_uri('assets/js/tilt.jquery.min.js'), array('jquery'), '1.00', true);
	wp_enqueue_script('medi_plus_owl_carousel_js', get_theme_file_uri('assets/js/owl-carousel.js'), array('jquery'), '1.00', true);
	wp_enqueue_script('medi_plus_jquery_counterup_js', get_theme_file_uri('assets/js/jquery.counterup.min.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_jsteller_js', get_theme_file_uri('assets/js/steller.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_wow_js', get_theme_file_uri('assets/js/wow.min.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_magnific_js', get_theme_file_uri('assets/js/jquery.magnific-popup.min.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_waypoints_js', get_theme_file_uri('assets/js/waypoints.min.js'), array('jquery'), '1.00', true);

	wp_enqueue_script('medi_plus_bootstrap_js', get_theme_file_uri('assets/js/bootstrap.min.js'), array('jquery'), '1.00', true);
	wp_enqueue_script('medi_plus_main_js', get_theme_file_uri('assets/js/main.js'), array('jquery'), '1.00', true);
}


add_action('wp_enqueue_scripts', 'medi_plus_js_enquee');