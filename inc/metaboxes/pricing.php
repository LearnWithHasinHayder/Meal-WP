<?php

function meal_pricing_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/pricing.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-pricing-options',
        'title'     => __( 'Pricing Options', 'meal' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'meal-pricing-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'plan-one-title',
                        'title'   => __( 'Plan One Title', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'plan-two-title',
                        'title'   => __( 'Plan Two Title', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'plan-one-action',
                        'title'   => __( 'Plan One Url', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'plan-two-action',
                        'title'   => __( 'Plan Two Url', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'items',
                        'title'   => __( 'Items', 'meal' ),
                        'type'    => 'textarea',
                    ),
	                array(
                        'id'    => 'plan-one-items',
                        'title'   => __( 'Plan One Items', 'meal' ),
                        'type'    => 'textarea',
                    ),
	                array(
                        'id'    => 'plan-two-items',
                        'title'   => __( 'Plan Two Items', 'meal' ),
                        'type'    => 'textarea',
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','meal_pricing_metabox');