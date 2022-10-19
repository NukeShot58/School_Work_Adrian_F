<nav class="menu">

    <div class="logo">
        <?php
        $customLogoId = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($customLogoId, 'full');
        ?>
        <img src="<?php echo $logo[0]; ?>" alt="logo">
    </div>

    <?php 
    wp_nav_menu(
        array(
            'menu' => 'main_menu'
        )
    )
    ?>
</nav>