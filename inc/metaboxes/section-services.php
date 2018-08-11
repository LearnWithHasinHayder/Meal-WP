<?php

function meal_services_section_metabox( $metaboxes ) {
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'meal-section-type', true );
    $section_type = $section_meta['type'];
    if ( 'services' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-section-services',
        'title'     => __( 'services Settings', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'meal-services-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'services',
                        'type'            => 'group',
                        'title'           => __( 'Services', 'meal' ),
                        'button_title'    => __( 'New Service', 'meal' ),
                        'accordion_title' => __( 'Add New Service', 'meal' ),
                        'fields'          => array(
                            array(
                                'id'    => 'name',
                                'title' => __( 'Name', 'meal' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'icon',
                                'title' => __( 'Icon', 'meal' ),
                                'type'  => 'select',
                                'options'=>array(
                                    'flaticon-chicken'=>__('Chicken','meal'),
                                    'flaticon-pancake'=>__('Pancake','meal'),
                                    'flaticon-salad'=>__('Salad','meal'),
                                    'flaticon-vegetables'=>__('Vegetables','meal'),
                                    'flaticon-soup'=>__('Soup','meal'),
                                    'flaticon-tray'=>__('Tray','meal'),
                                )
                            ),
                            array(
                                'id'    => 'description',
                                'title' => __( 'Description', 'meal' ),
                                'type'  => 'textarea',
                            ),

                        )
                    ),

                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'meal_services_section_metabox' );