<?php
require_once get_theme_file_path( "/lib/csf/cs-framework.php" );
require_once get_theme_file_path( "/inc/metaboxes/section.php" );
require_once get_theme_file_path( "/inc/metaboxes/recipe.php" );
require_once get_theme_file_path( "/inc/metaboxes/page.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-banner.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-featured.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-gallery.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-chef.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-services.php" );
require_once get_theme_file_path( "/inc/metaboxes/taxonomy-featured.php" );

define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
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
	wp_enqueue_script( 'meal-portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array(
		'jquery',
		'jquery-magnific-popup-js',
		'imagesloaded-js',
		'isotope-js'
	), VERSION, true );
	wp_enqueue_script( 'meal-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), VERSION, true );

	if ( is_page_template( 'page-templates/landing.php' ) ) {
		wp_enqueue_script( 'meal-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array( 'jquery' ), VERSION, true );
		$ajaxurl = admin_url( 'admin-ajax.php' );
		wp_localize_script( 'meal-reservation-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
	}
}

add_action( 'wp_enqueue_scripts', 'meal_assets' );

function meal_codestar_init() {
	CSFramework_Metabox::instance( array() );
	CSFramework_Taxonomy::instance( array() );
}

add_action( 'init', 'meal_codestar_init' );

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
			$wp_error = '';
			wp_insert_post( $reservation_arguments, $wp_error );
			if ( ! $wp_error ) {
				echo "Successful";
			}
		}

	} else {
		echo 'Not allowed';
	}
	die();
}

add_action( 'wp_ajax_reservation', 'meal_process_reservation' );
add_action( 'wp_ajax_nopriv_reservation', 'meal_process_reservation' );














