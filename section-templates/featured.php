<?php
global $section_id;
$meal_section_meta = get_post_meta( $section_id, 'meal-section-featured', true );
$meal_section             = get_post( $section_id );
$meal_section_title       = $meal_section->post_title;
$meal_section_description = $meal_section->post_content;

?>
<div class="section" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3">
                    <?php echo esc_html($meal_section_title); ?>
                </h2>
                <p class="sub-heading mb-5">
                    <?php echo wp_kses_post($meal_section_description); ?>
                </p>
            </div>
        </div>
        <div class="row">

            <?php
            $meal_keys = array_keys($meal_section_meta['recipes']);
            $meal_section_recipes = $meal_section_meta['recipes'];
            $meal_recipe_one = get_post($meal_section_recipes[$meal_keys[0]]['recipe']);
            $meal_recipe_two = get_post($meal_section_recipes[$meal_keys[1]]['recipe']);
            $meal_recipe_three = get_post($meal_section_recipes[$meal_keys[2]]['recipe']);


            ?>
            <div class="ftco-46">
                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                    <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_recipe_one,"large"));?>);"></div>
                    <div class="ftco-46-text ftco-46-arrow-left">
                        <h4 class="ftco-46-subheading">
                            <?php echo esc_html(get_recipe_category($meal_recipe_two->ID)); ?>
                        </h4>
                        <h3 class="ftco-46-heading"><?php echo esc_html($meal_recipe_two->post_title) ?></h3>
                        <p class="mb-5">
                            <?php echo esc_html($meal_recipe_two->post_excerpt); ?>
                        </p>
                        <p><a href="<?php echo get_the_permalink($meal_recipe_two); ?>" class="btn-link"><?php _e('Learn More','meal'); ?> <span
                                    class="ion-android-arrow-forward"></span></a></p>
                    </div>
                    <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_recipe_three,"large"));?>);"></div>
                </div>

                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                    <div class="ftco-46-text ftco-46-arrow-right">
                        <h4 class="ftco-46-subheading"><?php echo esc_html(get_recipe_category($meal_recipe_one->ID)); ?></h4>
                        <h3 class="ftco-46-heading"><?php echo esc_html($meal_recipe_one->post_title) ?></h3>
                        <p class="mb-5">
                            <?php echo esc_html($meal_recipe_one->post_excerpt); ?>
                        </p>
                        <p><a href="<?php echo get_the_permalink($meal_recipe_one); ?>" class="btn-link"><?php _e('Learn More','meal'); ?> <span
                                    class="ion-android-arrow-forward"></span></a></p>
                    </div>
                    <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_recipe_two,"large"));?>);"></div>
                    <div class="ftco-46-text ftco-46-arrow-up">
                        <h4 class="ftco-46-subheading"><?php echo esc_html(get_recipe_category($meal_recipe_three->ID)); ?></h4>
                        <h3 class="ftco-46-heading"><?php echo esc_html($meal_recipe_three->post_title) ?></h3>
                        <p class="mb-5">
                            <?php echo esc_html($meal_recipe_three->post_excerpt); ?>
                        </p>
                        <p><a href="<?php echo get_the_permalink($meal_recipe_three); ?>" class="btn-link"><?php _e('Learn More','meal'); ?> <span
                                    class="ion-android-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- .section -->