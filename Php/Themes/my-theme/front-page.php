<!-- Szablon strony głównej -->

<?php get_header(); ?>

<nav class="menu">
    <?php 
    wp_nav_menu(
        array(
            'menu' => 'main_menu'
        )
    )
    ?>
</nav>

<?php get_footer(); ?>