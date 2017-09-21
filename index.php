<?php get_header(); ?>

<div id="Hero">
  <header>
    <h1><?php bloginfo('name'); ?></h1>
  </header>
  <a href="#Quem" class="arrow">Scroll down</a>
</div>

<!-- NavBar -->
<?php get_template_part( '/template-parts/navigation'); ?>

<!-- Content -->
<section class="container">
  <div id="Quem" class="content">

  <?php
    $your_query = new WP_Query( 'pagename=quem-somos' );
    while ( $your_query->have_posts() ) : $your_query->the_post();
  ?>

  <h2><?php the_title(); ?></h2>
  <span class="line"></span>
  <div class="col-md-6">
    <?php the_content(); ?>
  </div>

  <?php
    endwhile;
    wp_reset_postdata();
  ?>

  <div class="col-md-6">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/bigbluecloud.png" alt="clouds" class="img-responsive">
  </div>
</div><!-- NOTE: /quem -->

<div id="Contato" class="content text-center">

  <?php
    $your_query = new WP_Query( 'pagename=contato' );
    while ( $your_query->have_posts() ) : $your_query->the_post();
  ?>

  <h2><?php the_title(); ?></h2>
  <span class="line"></span>
  <?php the_content(); ?>
  <?php
    endwhile;
    wp_reset_postdata();
  ?>
</div><!-- NOTE: /contato -->


</section> <!--Container -->

<?php get_footer(); ?>
