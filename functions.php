<?php

add_action( 'after_setup_theme', 'nxw_setup_theme' );
function nxw_setup_theme() {
  add_theme_support( 'wp-block-styles' );
}

?>