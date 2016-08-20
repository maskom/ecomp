<header class="banner" id="header">
  <div id="header-top">
    <div class="container">
      <a class="brand navbar-brand hidden-xs" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
      <div class="navbar-form navbar-right hidden-xs">
          <?php get_search_form(); ?>
      </div>
    </div>
  </div>
  <nav id="nav-primary" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-primary-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand navbar-brand visible-xs" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="nav-primary-collapse">
        <?php
        if (has_nav_menu('primary_navigation')) :
          //wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav','fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()]);

            wp_nav_menu( array(
                    'menu'              => 'primary_navigation',
                    'theme_location'    => 'primary_navigation',
                    'depth'             => 2,
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
        endif;
        ?>
        <div class="visible-xs row">
          <hr>
          <div class="col-sm-12">
            <?php get_search_form(); ?>
          </div>
        </div>

      </div>
    </div>
  </nav>
</header>
