<?php

function meal_featured_category($metaboxes){
	$metaboxes[]   = array(
		'id'       => 'meal-tax-featured',
		'taxonomy' => 'category',
		'fields'   => array(
			array(
				'id'    => 'featured',
				'type'  => 'switcher',
				'title' => __('Featured','meal')
			),
		),
	);

	return $metaboxes;
}
add_filter('cs_taxonomy_options','meal_featured_category');