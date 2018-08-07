<?php
function meal_section_type_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'meal-section-type',
        'title'     => __( 'section type', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'meal-section-type-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'type',
                        'title'   => __( 'Select section type', 'meal' ),
                        'type'    => 'select',
                        'options' => array(
                            'banner'       => __( 'Banner', 'meal' ),
                            'featured'     => __( 'Featured Recipes', 'meal' ),
                            'gallery'      => __( 'Gallery', 'meal' ),
                            'chef'         => __( 'Chef', 'meal' ),
                            'menu'         => __( 'Menu', 'meal' ),
                            'services'     => __( 'Services', 'meal' ),
                            'reservation'  => __( 'Reservation', 'meal' ),
                            'testimonials' => __( 'Testimonials', 'meal' ),
                            'contact'      => __( 'Contact', 'meal' ),
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'meal_section_type_metabox' );

