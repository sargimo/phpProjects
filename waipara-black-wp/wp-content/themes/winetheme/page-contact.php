<?php get_header(); ?>
<h1>Contact</h1>
<?php

$blurb = get_theme_mod('wine_contact_blurb');
if ($blurb || is_customize_preview()):
    echo wpautop($blurb);
endif;

get_template_part('template-parts/content');
get_footer(); ?>