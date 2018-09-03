<?php
/**
 * Template Name: Pricing Plan
 */
?>
<?php

$meal_pricing_meta      = get_post_meta( get_the_ID(), 'meal-pricing-options', true );
$meal_pricing_items     = explode( "\n", $meal_pricing_meta['items'] );
$meal_pricing_one_items = explode( "\n", $meal_pricing_meta['plan-one-items'] );
$meal_pricing_two_items = explode( "\n", $meal_pricing_meta['plan-two-items'] );
get_header();

$section_id = 13;
get_template_part( "section-templates/banner" );
the_post();
?>
<div class="main-wrap" id="section-home">
    <div <?php post_class( 'single-post' ) ?>>
        <div class="container">
            <div class="row post-body">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
					<?php
					the_content();
					?>
                </div>

                <div class="col-md-12">
                    <!-- section start-->
                    <section class="section-gap">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-10">
                                    <div class="table-responsive">
                                        <table class="table table-bordered price-plan">
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col"><?php echo esc_html( $meal_pricing_meta['plan-one-title'] ); ?></th>
                                                <th scope="col"><?php echo esc_html( $meal_pricing_meta['plan-two-title'] ); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php
											$meal_counter = 0;
											foreach ( $meal_pricing_items as $meal_pricing_item ):
                                                $meal_plan_one_data = apply_filters('meal_pricing_item',$meal_pricing_one_items[ $meal_counter ]);
                                                $meal_plan_two_data = apply_filters('meal_pricing_item',$meal_pricing_two_items[ $meal_counter ]);
												?>
                                                <tr>
                                                    <td><strong><?php echo esc_html( $meal_pricing_item ); ?></strong>
                                                    </td>
                                                    <td><?php echo wp_kses_post( $meal_plan_one_data ); ?></td>
                                                    <td><?php echo wp_kses_post( $meal_plan_two_data ); ?></td>
                                                </tr>
												<?php
												$meal_counter ++;
											endforeach;
											?>
                                            <tr>
                                                <td>
                                                    <strong><?php _e( 'Action', 'meal' ); ?></strong>
                                                </td>
                                                <td>
                                                    <a href="<?php echo esc_url( $meal_pricing_meta['plan-one-action'] ); ?>"
                                                       class="btn btn-danger"><?php _e( 'Get This Plan', 'meal' ); ?></a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo esc_url( $meal_pricing_meta['plan-two-action'] ); ?>"
                                                       class="btn btn-danger">
	                                                    <?php _e( 'Get This Plan', 'meal' ); ?>
                                                    </a>
                                                </td>

                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
