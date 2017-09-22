<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Mobile / Sandwich Menu -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#Top"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_small.png" alt="logo small"></a>
    </div>

    <?php wp_nav_menu( array(
      'container_id'     => 'navbar',
      'container_class'  => 'collapse navbar-collapse',
      'menu_id'          => 'navbar',
      'menu_class'       => 'nav nav-justified nav-pills',
    ) ); ?>
  </div>
</nav>
