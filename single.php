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
      <h2><?php the_title(); ?></h2>
    </div>
    <span class="line"></span>
    <article class="<?php echo basename(get_permalink()); ?>">

      <?php
      // Source: http://callmenick.com/post/custom-wordpress-loop-with-pagination
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $query_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => $paged
      );
      // create a new instance of WP_Query
      $the_query = new WP_Query( $query_args );
      ?>

      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
        <div class="blog-posts">
          <div class="blog-posts-img">
            <img src="<?php echo catch_that_image() ?>" alt="">
          </div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <span class="date"><?php echo get_the_date(); ?></span>
        </div>
      <?php endwhile; ?>

      <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
        <nav class="prev-next-posts">
          <div class="prev-posts-link">
            <?php echo get_next_posts_link( '< Anteriores', $the_query->max_num_pages ); // display older posts link ?>
          </div>
          <div class="next-posts-link">
            <?php echo get_previous_posts_link( 'Próximos >' ); // display newer posts link ?>
          </div>
        </nav>
      <?php } ?>

    <?php else: ?>
      <article>
        <h4>Desculpe</h4>
        <p><?php _e('Nenhum conteúdo econtrado.'); ?></p>
      </article>
    <?php endif; ?>
  </article>
</div>

</section> <!--Container -->

<?php get_footer(); ?>
