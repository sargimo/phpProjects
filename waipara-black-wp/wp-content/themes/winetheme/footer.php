<footer>
    Copyright <?php echo date('Y'); ?>
    <?php wp_nav_menu(array(
                'menu_class' => false,
                'container' => false,
                'theme_location' => 'footer-menu'
            )); ?>
</footer>
<!-- <script>
    var nav = responsiveNav(".nav-collapse");
</script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/headroom.js"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>