<?php 

function mediplus_slider_metaboxes(){
$mediplus_metabox = new_cmb2_box(array(
  'id'  => 'slider_metabox',
  'title'         => __( 'Slider Buttons', 'mediplus' ),
  'object_types'  => array( 'medislider', ), // Post type
  'context'       => 'normal',
  'priority'      => 'high',
  'show_names'    => true, // Show field names on the left

));


// slider button label
	$mediplus_metabox->add_field( array(
		'name'       => __( 'Slider Button Label', 'mediplus' ),
		'desc'       => __( 'Add your Button Label', 'mediplus' ),
		'id'         => '_sldider_btn_label_',
		'type'       => 'text',
	) );

// slider button label
	$mediplus_metabox->add_field( array(
		'name'       => __( 'Slider Button URl', 'mediplus' ),
		'desc'       => __( 'Add your Button URL', 'mediplus' ),
		'id'         => '_sldider_btn_url_',
		'type'       => 'text_url',
	) );


}



add_action( 'cmb2_admin_init', 'mediplus_slider_metaboxes' );
