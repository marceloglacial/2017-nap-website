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
        'posts_per_page' => 10,
        'paged' => $paged
      );
      // create a new instance of WP_Query
      $the_query = new WP_Query( $query_args );
      ?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
        <article class="">
          <?php // Get post image
          $attachments = get_posts( array(
            'post_type' => 'attachment',
            'posts_per_page' => -1,
            'post_parent' => $post->ID,
          ) );
          if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
              $class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
              $thumbimg = wp_get_attachment_link( $attachment->ID, 'thumbnail-size', true );
              echo '<p class="' . $class . '">' . $thumbimg . '</p>';
            };
          };
          ?>

          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <em><?php echo get_the_date(); ?></em>
        <?php endwhile; ?>
      </article>

      <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
        <nav class="prev-next-posts">
          <div class="prev-posts-link">
            <?php echo get_next_posts_link( '< Older', $the_query->max_num_pages ); // display older posts link ?>
          </div>
          <div class="next-posts-link">
            <?php echo get_previous_posts_link( 'Newer >' ); // display newer posts link ?>
          </div>
        </nav>
      <?php } ?>

    <?php else: ?>
      <article>
        <h4>Sorry...</h4>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      </article>
    <?php endif; ?>
  </article>
</div>

</section> <!--Container -->

<?php get_footer(); ?>
