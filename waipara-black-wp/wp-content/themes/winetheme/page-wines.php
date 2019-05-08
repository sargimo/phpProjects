<?php get_header(); ?>
<h1>Wines</h1>
<p>I don't like wordpress</p>
<?php
$args = array(
    'post_type' => 'wine_wines',
    'posts_per_page' => 5
);
$loop = new WP_QUERY($args);
if($loop->have_posts()): $count = 0;
while ($loop->have_posts()):
    $loop->the_post(); ?>
<h2><a href="<?php echo site_url()?>/wine_wines/<?php echo $post->post_name; ?>"><?php echo the_title(); ?></a></h2>
<img src="<?php the_post_thumbnail_url(); ?>">
<?php endwhile;
endif;

get_footer(); ?>