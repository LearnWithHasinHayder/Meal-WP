<?php
require_once get_theme_file_path( "/lib/csf/cs-framework.php" );
require_once get_theme_file_path( "/inc/metaboxes/section.php" );
require_once get_theme_file_path( "/inc/metaboxes/recipe.php" );
require_once get_theme_file_path( "/inc/metaboxes/page.php" );
require_once get_theme_file_path( "/inc/metaboxes/pricing.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-banner.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-featured.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-gallery.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-chef.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-services.php" );
require_once get_theme_file_path( "/inc/metaboxes/taxonomy-featured.php" );

define( 'CS_ACTIVE_FRAMEWORK', true ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true

if ( site_url() == "http://meal.lwhh.com" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function meal_theme_setup() {
	load_theme_textdomain( 'meal', get_template_directory() . "/languages" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tags' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list'
	) );
	add_theme_support( 'custom-logo' );

	register_nav_menu( 'primary', __( 'Main Menu', 'meal' ) );
}

add_action( 'after_setup_theme', 'meal_theme_setup' );

function meal_assets() {
	wp_enqueue_style( 'meal-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700"' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', null, VERSION );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', null, VERSION );
	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', null, VERSION );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, VERSION );
	wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/assets/css/aos.css', null, VERSION );
	wp_enqueue_style( 'bootstrap-datepicker-css', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', null, VERSION );
	wp_enqueue_style( 'jquery.timepicker-css', get_template_directory_uri() . '/assets/css/jquery.timepicker.css', null, VERSION );
	wp_enqueue_style( 'ionicons-css', get_theme_file_uri( '/assets/fonts/ionicons/css/ionicons.min.css' ) );
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/fonts/fontawesome/css/font-awesome.min.css' ) );
	wp_enqueue_style( 'flaticon-css', get_theme_file_uri( '/assets/fonts/flaticon/font/flaticon.css' ) );
	wp_enqueue_style( 'meal-portfolio-css', get_template_directory_uri() . '/assets/css/portfolio.css', null, VERSION );
	wp_enqueue_style( 'meal-style-css', get_template_directory_uri() . '/assets/css/style.css', null, VERSION );
	wp_enqueue_style( 'meal-style', get_stylesheet_uri() );

	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery.waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'bootstrap-datepicker.js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-timepicker-js', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-isotope-js', get_template_directory_uri() . '/assets/js/jquery.isotope.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'google-map-js', '//maps.googleapis.com/maps/api/js?key=AIzaSyBPgqXn1dvX7Nli5rnjuf6unU3MC903qF8', null, '1.0', true );
	wp_enqueue_script( 'meal-loadmore-js', get_template_directory_uri() . '/assets/js/loadmore.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'meal-portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array(
		'jquery',
		'jquery-magnific-popup-js',
		'imagesloaded-js',
		'isotope-js'
	), VERSION, true );


	if ( is_page_template( 'page-templates/mailchimp.php' ) ) {
		wp_enqueue_style( 'mailchimp-css', '//cdn-images.mailchimp.com/embedcode/classic-10_7.css' );
		$style = <<<EOD
#mc_embed_signup {
    background: #fff;
    clear: left;
    font: 14px Helvetica, Arial, sans-serif;
}
EOD;
		wp_add_inline_style( 'mailchimp-css', $style );

		wp_enqueue_script( 'mailchimp-js', '//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array( 'jquery' ), '1.0', true );
		$script = <<<EOD
(function ($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
    fnames[1] = 'FNAME';
    ftypes[1] = 'text';
    fnames[2] = 'LNAME';
    ftypes[2] = 'text';
    fnames[3] = 'ADDRESS';
    ftypes[3] = 'address';
    fnames[4] = 'PHONE';
    ftypes[4] = 'phone';
}(jQuery));
var \$mcj = jQuery.noConflict(true);
EOD;

		wp_add_inline_script( 'mailchimp-js', $script );
	}

	wp_enqueue_script( 'meal-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), VERSION, true );


	if ( is_page_template( 'page-templates/landing.php' ) ) {
		wp_enqueue_script( 'meal-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array( 'jquery' ), VERSION, true );
		wp_enqueue_script( 'meal-contact-js', get_template_directory_uri() . '/assets/js/contact.js', array( 'jquery' ), VERSION, true );
		$ajaxurl = admin_url( 'admin-ajax.php' );
		wp_localize_script( 'meal-reservation-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
		wp_localize_script( 'meal-contact-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
		wp_localize_script( 'meal-portfolio-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
	}
}

add_action( 'wp_enqueue_scripts', 'meal_assets' );

function meal_codestar_init() {
	CSFramework_Metabox::instance( array() );
	CSFramework_Taxonomy::instance( array() );

	$settings = array(
		'menu_title'      => __( 'Meal Options', 'meal' ),
		'menu_type'       => 'submenu',
		'menu_parent'     => 'themes.php',
		'menu_slug'       => 'meal_option_panel',
		'framework_title' => __( 'Meal Options', 'meal' ),
		'menu_icon'       => 'dashicons-dashboard',
		'menu_position'   => 20,
		'ajax_save'       => false,
		'show_reset_all'  => true
	);

	new CSFramework( $settings, meal_get_theme_options() );
}

add_action( 'init', 'meal_codestar_init' );


function meal_get_theme_options() {
	$options   = array();
	$options[] = array(
		'name'   => 'meal_theme_activation',
		'title'  => __( 'Theme Activation', 'meal' ),
		'icon'   => 'fa fa-heart',
		'fields' => array(
			array(
				'id'    => 'meal_username',
				'type'  => 'text',
				'title' => __( 'Username', 'meal' ),
			),
			array(
				'id'    => 'meal_purchase_code',
				'type'  => 'text',
				'title' => __( 'Purchase Code', 'meal' ),
			),
		)
	);

	$username      = cs_get_option( 'meal_username' );
	$purchase_code = cs_get_option( 'meal_purchase_code' );
	$token         = get_option( 'meal_theme_token' );

	if ( get_option( 'meal_theme_activation' ) == 1 ) {

		$theme_demo_url                               = "http://secure.meal.com/deliver.php?u={$username}&pc={$purchase_code}&token={$token}&file=theme-demo";
		$options[ count( $options ) - 1 ]['fields'][] = array(
			'id'      => 'meal_download_file',
			'type'    => 'notice',
			'class'   => 'success',
			'content' => "Download <a target='_blank' href='{$theme_demo_url}'>From Here</a> ",
		);
	}

	return $options;
}


function get_recipe_category( $recipe_id ) {
	$terms = wp_get_post_terms( $recipe_id, "category" );
	if ( $terms ) {
		$first_term = array_shift( $terms );

		return $first_term->name;
	}

	return "Food";
}

function meal_process_reservation() {

	if ( check_ajax_referer( 'reservation', 'rn' ) ) {
		$name    = sanitize_text_field( $_POST['name'] );
		$email   = sanitize_text_field( $_POST['email'] );
		$persons = sanitize_text_field( $_POST['persons'] );
		$phone   = sanitize_text_field( $_POST['phone'] );
		$date    = sanitize_text_field( $_POST['date'] );
		$time    = sanitize_text_field( $_POST['time'] );

		$data = array(
			'name'    => $name,
			'email'   => $email,
			'phone'   => $phone,
			'persons' => $persons,
			'date'    => $date,
			'time'    => $time
		);
		//print_r( $data );

		$reservation_arguments = array(
			'post_type'   => 'reservation',
			'post_author' => 1,
			'post_date'   => date( 'Y-m-d H:i:s' ),
			'post_status' => 'publish',
			'post_title'  => sprintf( '%s - Reservation for %s persons on %s - %s', $name, $persons, $date . " : " . $time, $email ),
			'meta_input'  => $data
		);

		$reservations = new WP_Query( array(
			'post_type'   => 'reservation',
			'post_status' => 'publish',
			'meta_query'  => array(
				'relation'    => 'AND',
				'email_check' => array(
					'key'   => 'email',
					'value' => $email
				),
				'date_check'  => array(
					'key'   => 'date',
					'value' => $date
				),
				'time_check'  => array(
					'key'   => 'time',
					'value' => $time
				),
			)
		) );
		if ( $reservations->found_posts > 0 ) {
			echo 'Duplicate';
		} else {
			$wp_error       = '';
			$reservation_id = wp_insert_post( $reservation_arguments, $wp_error );

			//transient check
			$reservation_count = get_transient( 'res_count' ) ? get_transient( 'res_count' ) : 0;
			//transient check end

			if ( ! $wp_error ) {

				$reservation_count ++;
				set_transient( 'res_count', $reservation_count, 0 );

				$_name      = explode( " ", $name );
				$order_data = array(
					'first_name' => $_name[0],
					'last_name'  => isset( $_name[1] ) ? $_name[1] : '',
					'email'      => $email,
					'phone'      => $phone,
				);
				$order      = wc_create_order();
				$order->set_address( $order_data );
				$order->add_product( wc_get_product( 79 ), 1 );
				$order->set_customer_note( $reservation_id );
				$order->calculate_totals();

				add_post_meta( $reservation_id, 'order_id', $order->get_id() );

				echo $order->get_checkout_payment_url();
			}
		}

	} else {
		echo 'Not allowed';
	}
	die();
}

add_action( 'wp_ajax_reservation', 'meal_process_reservation' );
add_action( 'wp_ajax_nopriv_reservation', 'meal_process_reservation' );


function meal_checkout_fields( $fields ) {

	// remove billing fields
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_address_1'] );
	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['billing']['billing_city'] );
	unset( $fields['billing']['billing_postcode'] );
	unset( $fields['billing']['billing_country'] );
	unset( $fields['billing']['billing_state'] );

	// remove shipping fields
	unset( $fields['shipping']['shipping_first_name'] );
	unset( $fields['shipping']['shipping_last_name'] );
	unset( $fields['shipping']['shipping_company'] );
	unset( $fields['shipping']['shipping_address_1'] );
	unset( $fields['shipping']['shipping_address_2'] );
	unset( $fields['shipping']['shipping_city'] );
	unset( $fields['shipping']['shipping_postcode'] );
	unset( $fields['shipping']['shipping_country'] );
	unset( $fields['shipping']['shipping_state'] );

	// remove order comment fields
	unset( $fields['order']['order_comments'] );

	return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'meal_checkout_fields' );

function meal_order_status_processing( $order_id ) {
	$order          = wc_get_order( $order_id );
	$reservation_id = $order->get_customer_note();
	if ( $reservation_id ) {
		$reservation = get_post( $reservation_id );
		wp_update_post( array(
			'ID'         => $reservation_id,
			'post_title' => "[Paid] - " . $reservation->post_title
		) );

		add_post_meta( $reservation_id, 'paid', 1 );
	}
}

add_filter( 'woocommerce_order_status_processing', 'meal_order_status_processing' );

function meal_change_menu( $menu ) {
	$reservation_count = get_transient( 'res_count' ) ? get_transient( 'res_count' ) : 0;
	if ( $reservation_count > 0 ) {
		$menu[5][0] = "Reservation <span class='awaiting-mod'>{$reservation_count}</span> ";
	}

	return $menu;
}

add_filter( 'add_menu_classes', 'meal_change_menu' );

function meal_admin_scripts( $screen ) {
	$_screen = get_current_screen();
	if ( 'edit.php' == $screen && 'reservation' == $_screen->post_type ) {
		delete_transient( 'res_count' );
	}
}

add_action( 'admin_enqueue_scripts', 'meal_admin_scripts' );

function meal_contact_email() {
	if ( check_ajax_referer( 'contact', 'cn' ) ) {
		$name    = isset( $_POST['name'] ) ? $_POST['name'] : '';
		$email   = isset( $_POST['email'] ) ? $_POST['email'] : '';
		$phone   = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
		$message = isset( $_POST['message'] ) ? $_POST['message'] : '';

		$_message    = sprintf( "%s \nFrom: %s\nEmail: %s\nPhone: %s", $message, $name, $email, $phone );
		$admin_email = get_option( 'admin_email' );

		//postfix

		wp_mail( 'me@hasin.me', __( 'Someone tried to contact you', 'meal' ), $_message, "From: hasin@hasinhayder.com\r\n" );
		die( 'successful' );
	}
	die( 'error' );
}

add_action( 'wp_ajax_contact', 'meal_contact_email' );
add_action( 'wp_ajax_nopriv_contact', 'meal_contact_email' );


function meal_change_nav_menu( $menus ) {
	$string_to_replace = home_url( "/" ) . "section/";
	if ( is_front_page() ) {
		foreach ( $menus as $menu ) {
			$new_url = str_replace( $string_to_replace, "#", $menu->url );

			if ( $new_url != $menu->url ) {
				$new_url = rtrim( $new_url, "/" );
			}

			$menu->url = $new_url;
		}
	}

	return $menus;
}

add_filter( 'wp_nav_menu_objects', 'meal_change_nav_menu' );

function meal_verify_purchase() {
	$username      = cs_get_option( 'meal_username' );
	$purchase_code = cs_get_option( 'meal_purchase_code' );
	if ( $username != '' && $purchase_code != '' ) {
		$url      = "http://secure.meal.com/verify.php?u={$username}&pc={$purchase_code}";
		$response = wp_remote_get( $url );
		$body     = $response['body'];
		if ( 'error' != $body ) {
			update_option( 'meal_theme_activation', 1 );
			update_option( 'meal_theme_token', $body );
			require_once( get_theme_file_path( "/inc/tgm.php" ) );
		} else {
			update_option( 'meal_theme_activation', 0 );
			update_option( 'meal_theme_token', '' );
		}

	} else {
		update_option( 'meal_theme_activation', 0 );
		update_option( 'meal_theme_token', '' );
	}

}

add_action( 'after_setup_theme', 'meal_verify_purchase' );


function meal_allow_external_host( $allow, $host, $url ) {
	if ( 'secure.meal.com' == $host ) {
		return true;
	}
}

add_filter( 'http_request_host_is_external', 'meal_allow_external_host', 10, 3 );

function meal_comment_form_fields( $fields ) {
	/*echo "<pre>";
	print_r($fields);
	echo "</pre>";*/

	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'meal_comment_form_fields' );


function meal_process_pricing_item( $item ) {
	if ( trim( $item ) == '1' ) {
		return '<i class="fa fa-check plan-active-color fa-2x">';
	} else if ( trim( $item ) == '0' ) {
		return '<i class="fa fa-ellipsis-h plan-inactive-color fa-2x">';
	}

	return $item;
}

add_filter( 'meal_pricing_item', 'meal_process_pricing_item' );

function get_max_page_number() {
	global $wp_query;

	return $wp_query->max_num_pages;
}

function meal_load_portfolio_items() {
	if ( wp_verify_nonce( $_POST['nonce'], 'loadmorep' ) ) {
		$meal_section_id       = $_POST['sid'];
		$meal_offset       = $_POST['offset'];
		$meal_section_meta     = get_post_meta( $meal_section_id, 'meal-section-gallery', true );
		$meal_number_of_images = $meal_section_meta['nimages'];
		$meal_gallery_items = $meal_section_meta['portfolio'];
		$meal_gallery_items = array_slice($meal_gallery_items,$meal_offset);
		$meal_counter       = 0;
		echo "<div class='portfolio'>";
		foreach ( $meal_gallery_items as $meal_gallery_item ):
			if ( $meal_counter >= $meal_number_of_images ) {
				break;
			}
			$meal_item_class            = str_replace( ",", " ", $meal_gallery_item['categories'] );
			$meal_item_image_id         = $meal_gallery_item['image'];
			$meal_item_thumbnail        = wp_get_attachment_image_src( $meal_item_image_id, 'medium' );
			$meal_item_large            = wp_get_attachment_image_src( $meal_item_image_id, 'large' );
			$meal_item_categories_array = explode( ",", $meal_gallery_item['categories'] );
			?>

            <div class="portfolio-item <?php echo esc_attr( $meal_item_class ); ?>">
                <a href="<?php echo esc_url( $meal_item_large[0] ); ?>"
                   class="portfolio-image popup-gallery">
                    <img src="<?php echo esc_url( $meal_item_thumbnail[0] ); ?>" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4><?php echo esc_html( $meal_gallery_item['title'] ) ?></h4>
                            <div class="portfolio-category">
								<?php
								foreach ( $meal_item_categories_array as $meal_item_category ):
									printf( "<span>%s</span>", trim( $meal_item_category ) );
								endforeach;
								?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
			<?php
			$meal_counter ++;
		endforeach;
		echo "</div>";
	}

	die();

}

add_action( 'wp_ajax_loadmorep', 'meal_load_portfolio_items' );
add_action( 'wp_ajax_nopriv_loadmorep', 'meal_load_portfolio_items' );

