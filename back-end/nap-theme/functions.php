<?php // Extra functions
add_theme_support( 'post-thumbnails' );

// Catch las image from post: http://www.wprecipes.com/how-to-get-the-first-image-from-the-post-and-display-it/
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "../wp-content/themes/nap-wordpress-theme/assets/img/blog_placeholder.png";
  }
  return $first_img;
}
?>
