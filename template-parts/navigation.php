
<nav class="navbar navbar-default navbar-fixed-top <?php if(is_home()) { ?>nav-home hidden<?php }; ?>" role="navigation">
  <div class="container-fluid">
    <!-- Mobile / Sandwich Menu -->
    <div class="navbar-header <?php if(!is_home()){ ?>brand-center<?php }; ?>">
      <?php if (is_home()) { ?>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <?php }; ?>
      <a class="navbar-brand" href="<?php if(is_home()) { ?> #Top <?php } else { bloginfo('url'); }; ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_small.png" alt="logo small"></a>
    </div>

    <?php
    if (is_home()) {
      wp_nav_menu(array(
        'container_id'     => 'navbar',
        'container_class'  => 'collapse navbar-collapse',
        'menu_id'          => 'navbar',
        'menu_class'       => 'nav nav-justified nav-pills',
      ));
    };
    ?>
  </div>
</nav>
