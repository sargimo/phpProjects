<?php get_header(); ?>
    <section class="hero is-success is-large">
        <div class="hero-body">
            <div class="container has-text-right hero-text">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/hero-wine.png" alt="wine">
                <h1>REDEFINED</h1>
                <p>QUALITY WINE MAKING SINCE 1984</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="padded-heading has-text-centered">
                <h1>
                    Our Story
                </h1>
            </div>
            <div class="columns">
                <div class="column is-4">
                    <!-- <img class="home-image" src="wp-content/themes/winetheme/assets/img/daniel-and-georgia.jpg" alt="Owners Daniel and Georgia"> -->
                    <?php 
                    $image = get_theme_mod('home-image1');
                    ?> <img src=<?php if ($image || is_customize_preview()):
                        echo $image;
                    endif;
                    ?>>
                </div>
                <div class="column is-8 home-story-text">
                    <p>
                        Daniel and Georgia are the current owners of Waipara Black and have been managing the brand since taking over from Pat and
                        Chris, who started the business in 1986. As a family run business, Waipara Black tries to embody
                        integrity, community and environment while on the path to creating an authentic portfolio of wines.
                    </p>
                </div>
            </div>
            <img class="vine-hr" src="<?php bloginfo('template_directory'); ?>/assets/img/vine-hr-line.png" alt="vine styled horizontal rule">
            <img class="vine-vertical" src="<?php bloginfo('template_directory'); ?>/assets/img/vine-hr-vertical.png" alt="vine styled horizontal rule">
            <div class="columns">
                <div class="column is-8 home-story-text">
                    <p>
                        Knowing that great wine starts in the vineyard, we work hard to maintain a precise level of detail from planting to picking.
                        Organic and Biodynamic practices are integral to our work, letting us stay true to nature and the
                        soil around us, and bring that expressive, organic taste to our final products.
                    </p>
                    <div class="has-text-right">
                        <a href="accommodation.html">
                            <i class="fas fa-angle-right"></i>Stay with us</a>
                    </div>
                </div>
                <div class="column is-4">
                    <img class="home-image" src="<?php bloginfo('template_directory'); ?>/assets/img/home-vineyard.jpg" alt="Home vineyard at dusk">
                </div>
            </div>
            <img class="vine-hr flip-img" src="<?php bloginfo('template_directory'); ?>/assets/img/vine-hr-line.png" alt="vine styled horizontal rule">
            <img class="vine-vertical" src="<?php bloginfo('template_directory'); ?>/assets/img/vine-hr-vertical.png" alt="vine styled horizontal rule">
            <div class="columns">
                <div class="column is-4">
                    <img class="home-image" src="<?php bloginfo('template_directory'); ?>/assets/img/home-storage.jpg" alt="Cellar with our wines in oak barrels">
                </div>
                <div class="column is-8 home-story-text">
                    <p>
                        We believe it’s important to keep everything intimate and as true to the original practices as possible. Every decision we
                        make tries to preserve the pure character of the vineyard and our history. It is important to us
                        and our community to stay true to what we have created, and the people that helped us get there.
                    </p>
                    <div class="has-text-right">
                        <a href="wine.html">
                            <i class="fas fa-angle-right"></i>Our wines</a>
                    </div>
                </div>
            </div>
            <img class="vine-hr" src="<?php bloginfo('template_directory'); ?>/assets/img/vine-hr-line.png" alt="vine styled horizontal rule">
            <img class="vine-vertical" src="<?php bloginfo('template_directory'); ?>/assets/img/vine-hr-vertical.png" alt="vine styled horizontal rule">
            <div class="columns">
                <div class="column is-8 home-story-text">
                    <p>
                        Sustainability is one of the most important things to us. We do everything we can to protect and enrich our soil as well
                        as our plants. We rely on a natural ecosystem for pest control as a nutritionally balanced vine will
                        not get sick and will not get bugs. We go as far as to still do the majority of our weeding with
                        sheep, just as we did in 1986. </p>
                </div>
                <div class="column is-4">
                    <img class="home-image" src="<?php bloginfo('template_directory'); ?>/assets/img/home-soil.jpg" alt="Hands holding soil">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="hero footer-custom">
            <div class="container">
                <div class="level">
                    <div class="column is-4">
                        <h2>
                            Stay connected to Waipara Black
                        </h2>
                        <p>
                            Just as important as our product is our community. We would love you to join us on our adventure and build a better future
                            together. Follow us on social media and join our club to keep up with all of our goings on and
                            to make sure you don't miss out on any of our exciting events!
                        </p>
                    </div>
                    <div class="column is-4">
                        <h2>
                            Keep Connected
                        </h2>
                        <ul>
                            <li>
                                <i class="fab fa-facebook"></i>Like us on Facebook</li>
                            <li>
                                <i class="fab fa-twitter"></i>Follow us on Twitter</li>
                            <li>
                                <i class="fab fa-instagram"></i>Follow us on Instagram</li>
                            <li>
                                <i class="fab fa-pinterest-p"></i>Follow us on Pinterest</li>
                        </ul>
                    </div>
                    <div class="column is-4">
                        <h2>
                            Contact Information
                        </h2>
                        <ul>
                            <li>
                                <i class="fas fa-home"></i>71 Geoffington Ave</li>
                            <li>
                                <i class="fas fa-map"></i>Waipara, New Zealand</li>
                            <li>
                                <i class="fas fa-phone"></i>0800 83 83 83</li>
                            <li>
                                <i class="fas fa-envelope"></i>info@waiparablack.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero footer-bottom">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <p>
                            Copyright @ 2013 Waipara Black. All rights reserved.
                        </p>
                    </div>
                    <div class="level-right">
                        <p>
                            <a>
                                <span class="footer-bottom-spacing-left">Company Information</span>
                            </a>
                            <a>
                                <span class="footer-bottom-spacing">Privacy Policy</span>
                            </a>
                            <a>
                                <span class="footer-bottom-spacing-right">Terms & Conditions</span>
                            </a>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>


<?php
get_footer(); ?>