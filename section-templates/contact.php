<?php
global $meal_section_id;
$meal_section             = get_post( $meal_section_id );
$meal_section_title       = $meal_section->post_title;
$meal_section_description = $meal_section->post_content;
?>

<div class="section" data-aos="fade-up" id="<?php echo esc_attr($meal_section->post_name); ?>">
	<div class="container">
		<div class="row section-heading justify-content-center mb-5">
			<div class="col-md-8 text-center">
				<h2 class="heading mb-3">
					<?php echo esc_html( $meal_section_title ); ?>
				</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10 p-5 form-wrap">
				<form action="#">
					<?php wp_nonce_field('contact','contact'); ?>
					<div class="row mb-4">
						<div class="form-group col-md-4">
							<label for="name" class="label"><?php _e('Name','meal') ?></label>
							<div class="form-field-icon-wrap">
								<span class="icon ion-android-person"></span>
								<input type="text" class="form-control" id="cname">
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="email" class="label"><?php _e('Email','meal') ?></label>
							<div class="form-field-icon-wrap">
								<span class="icon ion-email"></span>
								<input type="email" class="form-control" id="cemail">
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="phone" class="label"><?php _e('Phone','meal') ?></label>
							<div class="form-field-icon-wrap">
								<span class="icon ion-android-call"></span>
								<input type="text" class="form-control" id="cphone">
							</div>
						</div>

						<div class="form-group col-md-12">
							<label for="message" class="label"><?php _e('Message','meal') ?></label>
							<textarea name="message" id="cmessage" cols="30" rows="10"
							          class="form-control"></textarea>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-4">
							<input type="submit" id="send-message" class="btn btn-primary btn-outline-primary btn-block"
							       value="Send Message">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> <!-- .section -->