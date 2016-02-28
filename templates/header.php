<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <?php dynamic_sidebar('logo-header'); ?>
    </a>
    <div>
      <nav class="nav-primary pull-right">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => 'none',]);
          endif;
        ?>
        <?php dynamic_sidebar('sidebar-header'); ?>
      </nav>
    </div>
  </div>
</header>
