<?php
/*
* Template Name: Blog Template
*/
?>
<?php get_header(); ?>

<!-- NavBar -->
<?php get_template_part( '/template-parts/navigation'); ?>

<!-- Content -->
<section id="Blog">

  <div class="container">
    <div class="pages-header">
      <h2><a href="<?php bloginfo('url'); ?>/blog/">Blog</a></h2>
    </div>
    <span class="line"></span>
    <article class="blog-post">
      <?php
      while ( have_posts() ) : the_post(); ?>
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
      <div class="post-date"><a href="#Top">Publicado em <?php the_date() ?></a></div>
      <?php
    endwhile;
    wp_reset_query();
    ?>
  </article>
</div>

</section> <!--Container -->

<?php get_footer(); ?>
