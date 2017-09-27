<?php
/*
* Template Name: Blog Template
*/
?>
<?php get_header(); ?>

<!-- NavBar -->
<?php get_template_part( '/template-parts/navigation'); ?>

<!-- Content -->
<section>

  <div id="Quem" class="content">
  <?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <span class="line"></span>
        <?php the_content(); ?>
  	<?php endwhile; ?>
  <?php endif; ?>



</section> <!--Container -->

<?php get_footer(); ?>
