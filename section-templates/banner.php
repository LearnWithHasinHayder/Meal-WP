<?php
global $section_id;
$meal_section_meta = get_post_meta( $section_id, 'meal-section-banner', true );
$meal_banner_image = get_template_directory_uri() . '/assets/images/slider-1.jpg';
if ( isset( $meal_section_meta['banner_image'] ) ) {
    $meal_banner_image = wp_get_attachment_image_src( $meal_section_meta['banner_image'], 'full' );
}
$meal_section             = get_post( $section_id );
$meal_section_title       = $meal_section->post_title;
$meal_section_description = $meal_section->post_content;

?>
<div class="cover_1 overlay bg-slant-white bg-light">
    <div class="img_bg" style="background-image: url(<?php echo esc_url( $meal_banner_image[0] ); ?>);"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up">
                    <h2 class="heading mb-5">
                        <?php
                        echo esc_html( $meal_section_title );
                        ?>
                    </h2>
                    <p class="sub-heading mb-5">
                        <?php echo wp_kses_post($meal_section_description); ?>
                    </p>
                    <?php
                    /*$description = apply_filters('the_content', $meal_section_description );
                    $description = str_replace('<p','<p class="sub-heading mb-5"',$description);
                    echo wp_kses_post($description);*/
                    ?>
                    <p>
                        <a href="<?php echo esc_url($meal_section_meta['button_target']) ?>" class="smoothscroll btn btn-outline-white px-5 py-3">
                            <?php echo esc_html($meal_section_meta['button_title']) ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .cover_1 -->