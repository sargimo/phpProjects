<?php get_header(); ?>

<div class="hero-section">
  <!-- <div class="hero-section-text">
    <h1>Header</h1>
    <h5>subtitle about anything you like</h5> -->
  </div>
</div>

<div class="main-container">
	<div class="main-grid">
    
    <?php
    $args = array(
    'post_type' => 'product',
    'featured' => true
    );
    
    $loop = wc_get_products($args);
    
    foreach ($loop as $product) {

    }
        ?>
    
    <?php 
    ?>
    
</div>
</div>
<?php get_footer(); ?>