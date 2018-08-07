<?php
get_header();
?>

    <div class="main-wrap " id="section-home">

        <?php
        $section_id = 13;
        get_template_part("section-templates/banner");
        ?>


        <div class="section" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Find your best food</h2>
                        <p class="sub-heading mb-5">Free Website Template For Restaurants Made by <a href="#">Free-Template.co</a>
                        </p>
                    </div>
                </div>
                <div class="row">

                    <div class="ftco-46">
                        <div class="ftco-46-row d-flex flex-column flex-lg-row">
                            <div class="ftco-46-image" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg);"></div>
                            <div class="ftco-46-text ftco-46-arrow-left">
                                <h4 class="ftco-46-subheading">Vegies</h4>
                                <h3 class="ftco-46-heading">Beef Empanadas</h3>
                                <p class="mb-5">Separated they live in Bookmarksgrove right at the coast of the
                                    Semantics, a large language ocean.</p>
                                <p><a href="#" class="btn-link">Learn More <span
                                                class="ion-android-arrow-forward"></span></a></p>
                            </div>
                            <div class="ftco-46-image" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg);"></div>
                        </div>

                        <div class="ftco-46-row d-flex flex-column flex-lg-row">
                            <div class="ftco-46-text ftco-46-arrow-right">
                                <h4 class="ftco-46-subheading">Food</h4>
                                <h3 class="ftco-46-heading">Buttermilk Chicken Jibaritos</h3>
                                <p class="mb-5">A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia.</p>
                                <p><a href="#" class="btn-link">Learn More <span
                                                class="ion-android-arrow-forward"></span></a></p>
                            </div>
                            <div class="ftco-46-image" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg);"></div>
                            <div class="ftco-46-text ftco-46-arrow-up">
                                <h4 class="ftco-46-subheading">Food</h4>
                                <h3 class="ftco-46-heading">Chicken Chimichurri Croquettes</h3>
                                <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it
                                    is an almost unorthographic life.</p>
                                <p><a href="#" class="btn-link">Learn More <span
                                                class="ion-android-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- .section -->

        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 col-lg-8 section-heading">
                        <h2 class="heading mb-5">The Restaurant</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
        </div> <!-- .section -->


        <div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <ul class="portfolio-filter text-center">
                                <li class="active"><a href="#" data-filter="*"> All</a></li>
                                <li><a href="#" data-filter=".cat1">Salad</a></li>
                                <li><a href="#" data-filter=".cat2">Bread</a></li>
                                <li><a href="#" data-filter=".cat3">Fish</a></li>
                                <li><a href="#" data-filter=".cat4">Meat</a></li>
                                <li><a href="#" data-filter=".cat5">Fruits</a></li>
                            </ul>
                        </div>

                        <div class="portfolio-grid portfolio-gallery grid-4 gutter">

                            <div class="portfolio-item cat2 cat3 cat4">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img1.jpg" class="portfolio-image popup-gallery" title="Bread">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img1.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Branding</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item cat2 cat3 cat4">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img9.jpg" class="portfolio-image popup-gallery" title="Bread">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img9.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Branding</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item cat1 cat2 cat3">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img2.jpg" class="portfolio-image popup-gallery" title="Design">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img2.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Design</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item cat1 cat4">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img10.jpg" class="portfolio-image popup-gallery" title="Photography">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img10.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Photography</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item cat3 cat5">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img4.jpg" class="portfolio-image popup-gallery" title="Marketing">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img4.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Marketing</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item cat4 cat5">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img5.jpg" class="portfolio-image popup-gallery" title="Web Desgin">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img5.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Web Design</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item cat2 cat3">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img7.jpg" class="portfolio-image popup-gallery" title="Media">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img7.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Media</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item cat3 cat4 cat5">
                                <a href="<?php echo get_template_directory_uri();?>/assets/imgs/img6.jpg" class="portfolio-image popup-gallery" title="Portfolio">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/img6.jpg" alt=""/>
                                    <div class="portfolio-hover-title">
                                        <div class="portfolio-content">
                                            <h4>Portfolio</h4>
                                            <div class="portfolio-category">
                                                <span>Cat 1</span>
                                                <span>Cat 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .section -->

        <div class="section bg-white" data-aos="fade-up">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="heading mb-5">Meet The Chefs</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pr-md-5 text-center mb-5">
                        <div class="ftco-38">
                            <div class="ftco-38-img">
                                <div class="ftco-38-header">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/chef_1.jpg"
                                         alt="Free Website Template for Restaurants by Free-Template.co">
                                    <h3 class="ftco-38-heading">Daniel Graham</h3>
                                    <p class="ftco-38-subheading">Master Chef</p>
                                </div>
                                <div class="ftco-38-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean. It is a paradisematic country.</p>
                                    <p>
                                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 text-center mb-5">
                        <div class="ftco-38">
                            <div class="ftco-38-img">
                                <div class="ftco-38-header">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/chef_2.jpg"
                                         alt="Free Website Template for Restaurants by Free-Template.co">
                                    <h3 class="ftco-38-heading">Nick Browning</h3>
                                    <p class="ftco-38-subheading">Master Chef</p>
                                </div>
                                <div class="ftco-38-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean. It is a paradisematic country.</p>
                                    <p>
                                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4"></div> -->
                </div>
            </div>
        </div> <!-- .section -->

        <div class="section bg-light" id="section-menu" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Menu</h2>
                        <p class="sub-heading mb-5">Free Website Template For Restaurants Made by <a href="#">Free-Template.co</a>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <ul class="nav site-tab-nav" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill"
                                   href="#pills-breakfast" role="tab" aria-controls="pills-breakfast"
                                   aria-selected="true">Breakfast</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch"
                                   role="tab" aria-controls="pills-lunch" aria-selected="false">Brunch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner"
                                   role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel"
                                 aria-labelledby="pills-breakfast-tab">
                                <div class="d-block d-md-flex menu-food-item">

                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Warm Spinach Dip &amp; Chips</a></h3>
                                        <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp;
                                            salsa.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$10.49</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Key Wast Machos</a></h3>
                                        <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef,
                                            melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$11.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Crispy Onions Rings</a></h3>
                                        <p>A heaping mountain of rings, handmade with Panko breading and shredded
                                            coconut flakes.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$11.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Lobster &amp; Shrimp Quesadilla</a></h3>
                                        <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three
                                            cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$13.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->


                            </div>
                            <div class="tab-pane fade" id="pills-lunch" role="tabpanel"
                                 aria-labelledby="pills-lunch-tab">

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Jumbo Lump Crab Stack</a></h3>
                                        <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp;
                                            salsa.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$12.49</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Jamaican Chicken Wings</a></h3>
                                        <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef,
                                            melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$15.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Bahamian Seafood Chowder</a></h3>
                                        <p>A heaping mountain of rings, handmade with Panko breading and shredded
                                            coconut flakes.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$10.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Grilled Chicken &amp; Tropical Fruit on Mixed Greens</a></h3>
                                        <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three
                                            cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$12.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                            </div>
                            <div class="tab-pane fade" id="pills-dinner" role="tabpanel"
                                 aria-labelledby="pills-dinner-tab">

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Grilled Top Sirlion Steak</a></h3>
                                        <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp;
                                            salsa.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$18.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_1.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Steak Oscar</a></h3>
                                        <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef,
                                            melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$23.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_2.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Skirt Steak Churrasco</a></h3>
                                        <p>A heaping mountain of rings, handmade with Panko breading and shredded
                                            coconut flakes.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$20.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                                <div class="d-block d-md-flex menu-food-item">
                                    <div class="text order-1 mb-3">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_3.jpg"
                                             alt="Free Website Template for Restaurants by Free-Template.co">
                                        <h3><a href="#">Grilled Beef Steak</a></h3>
                                        <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three
                                            cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                                    </div>
                                    <div class="price order-2">
                                        <strong>$20.99</strong>
                                    </div>
                                </div> <!-- .menu-food-item -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- .section -->

        <div class="section bg-white services-section" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Other Services</h2>
                        <p class="sub-heading mb-5">Free Website Template For Restaurants Made by <a href="#">Free-Template.co</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-m mb-5d-6 col-lg-4" data-aos="fade-up">
                        <div class="media feature-icon d-block text-center">
                            <div class="icon">
                                <span class="flaticon-soup"></span>
                            </div>
                            <div class="media-body">
                                <h3>Quality Cuisine</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="media feature-icon d-block text-center">
                            <div class="icon">
                                <span class="flaticon-vegetables"></span>
                            </div>
                            <div class="media-body">
                                <h3>Fresh Food</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="media feature-icon d-block text-center">
                            <div class="icon">
                                <span class="flaticon-pancake"></span>
                            </div>
                            <div class="media-body">
                                <h3>Bread &amp; Pancake</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="500">
                        <div class="media feature-icon d-block text-center">
                            <div class="icon">
                                <span class="flaticon-tray"></span>
                            </div>
                            <div class="media-body">
                                <h3>Reserve Now</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="media feature-icon d-block text-center">
                            <div class="icon">
                                <span class="flaticon-salad"></span>
                            </div>
                            <div class="media-body">
                                <h3>Fresh Vegies Salad</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="500">
                        <div class="media feature-icon d-block text-center">
                            <div class="icon">
                                <span class="flaticon-chicken"></span>
                            </div>
                            <div class="media-body">
                                <h3>Whole Chicken</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- .section -->

        <div class="section bg-light" data-aos="fade-up" id="section-reservation">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Reservation</h2>
                        <p class="sub-heading mb-5">Free Website Template For Restaurants Made by <a href="#">Free-Template.co</a>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 p-5 form-wrap">
                        <form action="#">
                            <div class="row mb-4">
                                <div class="form-group col-md-4">
                                    <label for="name" class="label">Name</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-person"></span>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email" class="label">Email</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-email"></span>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone" class="label">Phone</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-call"></span>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="persons" class="label">Number of Persons</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-arrow-dropdown"></span>
                                        <select name="persons" id="persons" class="form-control">
                                            <option value="">1 person</option>
                                            <option value="">2 persons</option>
                                            <option value="">3 persons</option>
                                            <option value="">4 persons</option>
                                            <option value="">5+ persons</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="date" class="label">Date</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-calendar"></span>
                                        <input type="text" class="form-control" id="date">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="time" class="label">Time</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-time"></span>
                                        <input type="text" class="form-control" id="time">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary btn-outline-primary btn-block"
                                           value="Reserve Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- .section -->

        <div class="section bg-white" data-aos="fade-up">
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
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Image placeholder" class="mb-3">
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
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person_2.jpg" alt="Image placeholder" class="mb-3">
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
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person_3.jpg" alt="Image placeholder" class="mb-3">
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
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person_2.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Geert Green</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .section -->

        <div class="section" data-aos="fade-up" id="section-contact">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Get In Touch</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 p-5 form-wrap">
                        <form action="#">
                            <div class="row mb-4">
                                <div class="form-group col-md-4">
                                    <label for="name" class="label">Name</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-person"></span>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email" class="label">Email</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-email"></span>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone" class="label">Phone</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-call"></span>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="message" class="label">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary btn-outline-primary btn-block"
                                           value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- .section -->

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