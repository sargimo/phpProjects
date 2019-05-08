<?php get_header(); ?>
<div class="columns">
<div class="blog-content column is-two-thirds">
    <?php
    get_template_part('template-parts/content-single');
    ?>
</div>
<div class="sidebar-content is-one-third">
    <?php 
    get_sidebar();
    ?>
</div>
</div>
<?php
get_footer(); ?>