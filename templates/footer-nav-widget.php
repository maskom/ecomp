<?php
/*
 * Footer navigation and widget
 */

?>
<?php if(is_active_sidebar( 'sidebar-footer' ) || has_nav_menu('footer_navigation') ) : ?>
<section id="footer-nav-widget" class="bg-info <?php if(is_active_sidebar('sidebar-footer')) echo 'has-sidebar-footer '; if(has_nav_menu('footer_navigation')) echo 'has-nav-menu'; ?>">
    <div class="container">
        <div class="clearfix">
            <div class="section-footer-nav">
                <?php
                wp_nav_menu( array(
                        'menu'              => 'footer_navigation',
                        'theme_location'    => 'footer_navigation',
                        'depth'             => 2,
                        'container'         => 'nav',
                        'container_class'   => 'wrap-footer-nav',
                        'menu_class'        => 'nav footer-nav'
                    )
                );
                ?>
            </div>
            <?php if(is_active_sidebar('sidebar-footer')): ?>
            <div class="section-sidebar-footer">
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>