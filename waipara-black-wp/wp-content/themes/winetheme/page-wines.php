<?php get_header(); ?>
<h1>Wines</h1>
<p>I don't like wordpress</p>

<!-- < ?php
$args = array(
    'post_type' => 'wine_wines',
    'posts_per_page' => 5
);
$loop = new WP_QUERY($args);
if($loop->have_posts()): $count = 0;
while ($loop->have_posts()):
    $loop->the_post(); ?>
<h2><a href="< ?php echo site_url()?>/wine_wines/< ?php echo $post->post_name; ?>">< ?php echo the_title(); ?></a></h2>
<img src="< ?php the_post_thumbnail_url(); ?>">
< ?php endwhile;
endif;

get_footer(); ?> -->

    <section class="hero wine-hero">
        <div class="container hero-text columns">
            <div class="column is-8">
                <p></p>
            </div>
            <div class="column is-4 is-vertical-center">
                <h1>WINE</h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="padded-heading has-text-centered">
                <h1>
                    Current Collection
                </h1>
            </div>
            <div class="columns is-multiline">
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a href="2017-cs-chardonnay.html" class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Countryside</h2>
                            <h1>Chardonnay</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Mountainside</h2>
                            <h1>Chardonnay</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Backyard</h2>
                            <h1>Pet Nat</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Countryside</h2>
                            <h1>Pinot Noir</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>

                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Backyard</h2>
                            <h1>Pinot Noir</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Mountainside</h2>
                            <h1>Pinot Noir</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Mountainside</h2>
                            <h1>Reisling</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile wine-item">
                    <div class="wine-hover">
                        <h1>92</h1>
                        <h3>WineOrbit</h3>
                        <h1>96</h1>
                        <h3>Itl Wine Reviews</h3>
                        <p>Exquisitely polished and stunningly elegant, yet it is undeniably powerful and substantial. Fabulous
                            aromas of white stone fruit, baked apple, yeast and lemon peel with seductive brioche complexity
                            on the nose. The palate is concentrated[...}</p>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
                    <div class="wine-normal">
                        <div>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-bottle.png" alt="Our Mission Image">
                        </div>
                        <div>
                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/wine-hr.png" alt="Our Mission Image">
                        </div>
                        <div class="wine-titles">
                            <h2>2017 Backyard</h2>
                            <h1>Pinot Noir Library Release</h1>
                        </div>
                        <div class="btn-spacing">
                            <a class="btn-small">view wine</a>
                        </div>
                        <div>
                            <a class="btn-small">add to cart</a>
                        </div>
                    </div>
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
