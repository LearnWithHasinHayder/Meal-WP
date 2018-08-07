<?php

function meal_featured_section_metabox($metaboxes){
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if('section'!=get_post_type($section_id)){
        return $metaboxes;
    }

    $section_meta = get_post_meta($section_id,'meal-section-type',true);
    $section_type = $section_meta['type'];
    if('featured'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-section-featured',
        'title'     => __( 'Featured Recipes', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'meal-recipe-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'recipes',
                        'title'   => __( 'Select Recipes', 'meal' ),
                        'type'    => 'group',
                        'button_title'    => __('New Recipe','meal'),
                        'accordion_title' => __('Add New Recipe','meal'),
                        'fields'=>array(
                            array(
                                'id'=>'recipe',
                                'title'=>__('Select Recipe','meal'),
                                'type'=>'select',
                                'options'=>'post',
                                'query_args'=>array(
                                    'post_type'=>'recipe',
                                    'posts_per_page'=>-1
                                )
                            )
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','meal_featured_section_metabox');