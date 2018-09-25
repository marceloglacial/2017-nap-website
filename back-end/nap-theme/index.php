<?php
/*
* Template Name: Home Template
*/
?>


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
<section>

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
  $pgname = get_page_by_title('Nossa Equipe');
  $args = array(
    'post_parent' => $pgname->ID,
    'post_type' => 'page',
    'order' => 'ASC',
    'orderby' => 'title'
  );

  $child_query = new WP_Query( $args );
  ?>

  <h2>Nossa Equipe</h2> <!-- Fix this -->
  <span class="line"></span>

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
  $pgname = get_page_by_title('Nossos Serviços');
  $args = array(
    'post_parent' => $pgname->ID,
    'post_type' => 'page',
    'order' => 'ASC',
    'orderby' => 'title'
  );

  $child_query = new WP_Query( $args );
  ?>
  <h2>Nossos Serviços</h2> <!-- Fix this -->
  <span class="line"></span>

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
  <span class="clear"></span>
</div><!-- /Servicos -->

<div id="Contato" class="content">
  <?php
  $your_query = new WP_Query( 'pagename=contato' );
  while ( $your_query->have_posts() ) : $your_query->the_post();
  ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <?php
endwhile;
wp_reset_postdata();
?>
</div><!--  /contato -->


</section> <!--Container -->

<?php get_footer(); ?>
