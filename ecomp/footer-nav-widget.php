<?php if(is_active_sidebar( 'sidebar-footer' ) || has_nav_menu('footer_navigation') ) : ?>
<section class="footer-nav-widget bg-info">
    <div class="container">
        <?php
        wp_nav_menu( array(
                'menu'              => 'footer_navigation',
                'theme_location'    => 'footer_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'col-sm-8 wrap-footer-nav',
                'menu_class'        => 'nav footer-nav'
            )
        );
        ?>
        <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
</section>
<?php endif; ?>