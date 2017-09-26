<?php
  /*
  * Template Name: Home Template
  */
?>
<?php get_header(); ?>

<div id="Hero" class="container-fluid">
  <header>
    <h1><?php bloginfo('name'); ?></h1>
  </header>
</div>

<!-- NavBar -->
<?php get_template_part( '/template-parts/navigation'); ?>

<!-- Content -->
<section class="container">

  <div id="Quem" class="content row">
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
</div><!-- /Quem -->

<div id="Equipe" class="content row">
  <?php
  $args = array(
    'post_parent' => 11,
    'post_type' => 'page',
    'order' => 'ASC'
  );

  $child_query = new WP_Query( $args );
  ?>
  <h2 class="text-center">Nossa Equipe</h2> <!-- Fix this -->
  <span class="line"></span>

  <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

    <div class="card col-md-4">
      <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('page-thumb');
      }
      ?>
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>

  <?php
  wp_reset_postdata();
  ?>
</div><!-- /Equipe -->


<div id="Servicos" class="content row">
  <?php
  $args = array(
    'post_parent' => 9,
    'post_type' => 'page',
    'order' => 'ASC'
  );

  $child_query = new WP_Query( $args );
  ?>
  <h2 class="text-center">Nossos Serviços</h2> <!-- Fix this -->
  <span class="line"></span>

  <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

    <div class="card col-md-4">
      <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('page-thumb');
      }
      ?>
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>

  <?php
  wp_reset_postdata();
  ?></div><!-- /Servicos -->

<div id="Contato" class="content row">
  <?php
  $your_query = new WP_Query( 'pagename=contato' );
  while ( $your_query->have_posts() ) : $your_query->the_post();
  ?>
  <h2 class="text-center"><?php the_title(); ?></h2>
  <span class="line"></span>
  <?php the_content(); ?>
  <?php
endwhile;
wp_reset_postdata();
?>
</div><!--  /contato -->


</section> <!--Container -->

<?php get_footer(); ?>
