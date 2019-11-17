<?php

add_action('after_setup_theme', 'nxw_setup_theme');
function nxw_setup_theme()
{
  add_theme_support('wp-block-styles');
}

add_theme_support('post-thumbnails');
function get_first_image()
{
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if (empty($first_img)) {
    $first_img = get_template_directory_uri()."/img/default.webp";
  }
  return $first_img;
}
?>
