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
</div><!-- /Quem -->

<div id="Equipe" class="content">
  <?php
  $your_query = new WP_Query( 'pagename=nossa-equipe' );
  while ( $your_query->have_posts() ) : $your_query->the_post();
  ?>
  <h2 class="text-center"><?php the_title(); ?></h2>
  <span class="line"></span>
  <?php the_content(); ?>
  <?php
endwhile;
wp_reset_postdata();
?>


<?php
$args = array(
  'post_parent' => 7, 
  'post_type' => 'page',
  'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );
?>

<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

  <div class="card">
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

<div id="Servicos" class="content">
  <?php
  $your_query = new WP_Query( 'pagename=nossos-servicos' );
  while ( $your_query->have_posts() ) : $your_query->the_post();
  ?>
  <h2 class="text-center"><?php the_title(); ?></h2>
  <span class="line"></span>
  <?php the_content(); ?>
  <?php
endwhile;
wp_reset_postdata();
?>
</div><!-- /Servicos -->

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
</div><!--  /contato -->


</section> <!--Container -->

<?php get_footer(); ?>
