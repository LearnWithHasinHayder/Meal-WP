<?php
/**
 * Template Name: Landing Page
 */
?>
<?php
get_header();
?>

    <div class="main-wrap " id="section-home">

        <?php

        $meal_current_page_id = get_the_ID();
        $meal_page_meta = get_post_meta($meal_current_page_id,'meal-page-sections',true);
        foreach($meal_page_meta['sections'] as $meal_page_section):
            $meal_section_id = $meal_page_section['section'];
            $meal_section_meta = get_post_meta($meal_section_id,'meal-section-type',true);
            $meal_section_type = $meal_section_meta['type'];
	        get_template_part("section-templates/{$meal_section_type}");
        endforeach;
        ?>




        <!--<div class="section bg-white" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Customer Reviews</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center" data-aos="fade-up">
                    <div class="col-md-8">
                        <div class="owl-carousel home-slider-loop-false">


                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country, in which roasted parts of
                                        sentences fly into your mouth.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php /*echo get_template_directory_uri();*/?>/assets/images/person_1.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Maxim Smith</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php /*echo get_template_directory_uri();*/?>/assets/images/person_2.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Geert Green</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
                                        an almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php /*echo get_template_directory_uri();*/?>/assets/images/person_3.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Dennis Roman</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of
                                        bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text
                                        didn’t listen. She packed her seven versalia, put her initial into the belt and
                                        made herself on the way.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php /*echo get_template_directory_uri();*/?>/assets/images/person_2.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Geert Green</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--> <!-- .section -->



        <div class="map-wrap" id="map" data-aos="fade"></div>


        <footer class="ftco-footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="footer-widget">
                            <h3 class="mb-4">About Meal</h3>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild
                                Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p>
                            <!-- <input type="submit" class="btn btn-primary btn-outline-primary" value="Send Message"> -->
                            <p><a href="https://free-template.co" target="_blank"
                                  class="btn btn-primary btn-outline-primary">More Templates</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="footer-widget">
                            <h3 class="mb-4">Lunch Service</h3>
                            <p>Booking from 12:00pm &mdash; 1:30pm</p>
                            <h3 class="mb-4">Dinner Service</h3>
                            <p>Everyday: <br> Booking from 6:00pm &mdash; 9:00pm</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h3 class="mb-4">Follow Along</h3>
                            <ul class="list-unstyled social">
                                <li><a href="#"><span class="fa fa-tripadvisor"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h3 class="mb-4">Newsletter</h3>
                            <form action="#" class="ftco-footer-newsletter">
                                <div class="form-group">
                                    <button class="button"><span class="fa fa-envelope"></span></button>
                                    <input type="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row pt-5">
                    <div class="col-md-12 text-center">
                        <p>&copy; Copyright 2018. All Rights Reserved. Designed &amp; Developed by <a
                                    href="https://free-template.co/">Free-Template.co</a></p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
<?php
get_footer();
?>